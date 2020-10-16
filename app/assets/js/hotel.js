$(document).ready(function(){
    
    $("#sendId").click(registrationUser);
    $("#sendIdA").click(registrationUserA);
    $("#sendMessage").click(messagesFromContactUs);
    getEvents();
    getRooms();
    getCategories();
    getServices();
    getUsers();
    getMessages();
    getGallery();
    getEventsTop3();
    $(document).on("click",".deleteK",function(e){
        e.preventDefault();
        let id=$(this).data('id');

        $.ajax({
            url:'index.php?page=obrisiKorisnika',
            method:'GET',
            data:{
                id:id
            },
            success:function(){
                window.location.replace("http://localhost/hotux/index.php?page=admin");
            },
            error:function(xhr,greska,status){
                alert(greska);
            }
        })
    })
    $(document).on("click",".deletes",function(e){
        e.preventDefault();
        let id=$(this).data('id');

        $.ajax({
            url:'index.php?page=obrisiSobu',
            method:'GET',
            data:{
                id:id
            },
            success:function(data){
                window.location.replace("http://localhost/hotux/index.php?page=admin");
            },
            error:function(xhr,greska,status){
                alert(greska);
            }
        })
    })
})

function registrationUser() {
   
    let fname = $("#fname").val();
    let lname = $("#lname").val();
    let uname = $("#uname").val();
    let mail = $("#mail").val();
    let pass = $("#pass").val();
    let cpass = $("#cpass").val();
    
    $pFirstname=/^[A-Z]{1}[a-z]{2,25}$/;
    $pLastname=/^[A-Z]{1}[a-z]{2,25}$/;
    $pUsername=/^[a-zA-Z][a-zA-Z0-9-_]{3,32}$/;// a-z A-Z - I _
    $PPassword=/^(?=.*\d).{6,}$/;// brojevi, donje, slova
    $pEmail=/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    
     //PROVERE 
     $marker=0; //ako je 1 IMA GRESAKA
     if(fname.match($pFirstname)){
         $('#fG').html('');
      }
     else if(fname==""){
         $('#fG').html( 'Firstname is required field');
         $marker=1;
      }
     else{
         $("#fG").html("Firstname is not in good format");
         $marker=1;
      }
      //llastname
      if(lname.match($pLastname)){
          $('#lG').html( '');
      }
      else if(lname==""){
          $('#lG').html( 'Lastname is required field');
          $marker=1;
      }
      else{
          $("#lG").html("Lastname is not in good format");
          $marker=1;
      }
      //username
      if(uname.match($pUsername)){
          $('#uG').html( '');
      }
      else if(uname==""){
          $('#uG').html( 'Username is required field');
          $marker=1;
      }
      else{
          $("#uG").html("Username is not in good format");
          $marker=1;
      }
      //PASSWORD
      if(pass.match($PPassword)){
          $('#pG').html( '');
      }
      else if(pass==""){
          $('#pG').html( 'Password is required field');
          $marker=1;
      }
      else{
          $("#pG").html("Password is not in good format");
          $marker=1;
      }
      //REPASS
      if(cpass!=pass){
          $("#rPG").html("Passwords must match");
          $marker=1;
      }
      if(cpass==''){
          $("#rPG").html('');
      }
      else if(cpass==""){
          $("#rPG").html('You must repeat password');
      }
      if(mail.match($pEmail)){
          $('#eG').html( '');
      }
      else if(mail==""){
          $('#eG').html( 'Email is required field');
          $marker=1;
      }
      else{
          $("#eG").html("Email is not in good format");
          $marker=1;
      }
      console.log($marker);
if($marker==0){
   
   
   $.ajax({
       url:'index.php?page=registerUser',
       method:'POST',
       data:{
           fname:fname,
           lname:lname,
           uname:uname,
           mail:mail,
           pass:pass,
           kliknuto:true
       },
       success:function(){
        console.log("bravo");
        $("#feed").html("<h2>Successful registration!</h2>");
        $("#sendId").hide();

       },
       error:function(xhr, status, error){
        console.log(error);
       }
   })
}
} //end registracija

//contact us, slanje poruka
function messagesFromContactUs(){
    let naslov = $("#naslovId").val();
    let poruka = $("#poruka").val();
    let id = $("#hidn").val();
   
    
    $Renaslov=/^[A-Za-z]{4,25}$/;
    $Reporuka=/^[ a-zA-Z0-9,#.?-]+/;

    $marker=0;
    if(!naslov.match($Renaslov)||naslov=="" || poruka==''||!poruka.match($Reporuka)){
        $marker=1;
       
    }
    
    if ($marker==0){
        $.ajax({
            url:'index.php?page=contactPoruka',
            method:'POST',
            data:{
                naslov:naslov,
                poruka:poruka,
                id:id,
                kl:true
            },
            success:function(){
             console.log("bravo");
             
     
            },
            error:function(xhr, status, error){
             console.log(error);
            }
        })
    }
   
    
}
function getEvents() {
   
    $.ajax({
        url: "index.php?page=prikazEventovaSvih",
        method: "GET",
        dataType: "json",
        success: function (data) {
            printEvents(data);
        },
        error: function (xhr, status, error) {
           
        }

    });
}

function getEventsTop3() {
   
    $.ajax({
        url: "index.php?page=probajTop3",
        method: "GET",
        dataType: "json",
        success: function (data) {
            printEventsTop3(data);
        },
        error: function (xhr, status, error) {
           
        }

    });
}
function printEventsTop3(data) {
    let html = "";

    data.forEach(t =>{
        
        html += `
        <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="news-item">
            <div class="news-image">
                <img src="${t.slikaSrc}" alt="${t.slikaAlt}">
                <p class="dates white"><span class="white">${t.datum }</span> </p>
            </div>
            <div class="news-content">
                
                <h4><a href="events-detail.html">${t.event} </a></h4>
                <div class="meta mar-bottom-15">
                    <span class="time mar-right-10"> <i class="fas fa-clock"></i>  ${t.od}  pm - ${t.do} am</span>
                   
                </div>
                <p>${t.opis}</p>
                
            </div>
        </div>
    </div> 
        `;
    });
    
    $("#top").html(html);
}

function printEvents(data) {
    let html = "";

    data.forEach(e =>{
        
        html += `
        <div class="events-list mar-bottom-30">
                    <div class="row display-flex">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="news-image">
                                <img src="${e.slikaSrc}" alt="${e.slikaAlt}">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="events-content">
                                <h4><a href="events-detail.html"><span>${e.event}</span> Party</a></h4>
                                <div class="meta mar-bottom-15">
                                    <span class="time mar-right-10"> <i class="fas fa-clock"></i> ${e.od} pm - ${e.do} am</span>
                                    
                                </div>
                                <p class="mar-0">${e.opis}</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="time-from text-center">
                                <span >${e.datum }</span>
                               
                            </div>
                        </div>
                    </div>
                </div>
        `;
    });
    
    $("#eventovi").html(html);
}
function getGallery() {
   
    $.ajax({
        url: "index.php?page=probajSlike",
        method: "GET",
        dataType: "json",
        success: function (data) {
            printPhotos(data);
        },
        error: function (xhr, status, error) {
           
        }

    });
}

function printPhotos(data) {
    let html = "";

    data.forEach(p =>{
        
        html += `
        <div class="brick">
        <div class="gallery-item">
            <div class="gallery-image">
                <img src="${p.src}" alt="${p.alt}">
            </div>
           
        </div>
    </div>
        `;
    });
    
    $("#tuSlike").html(html);
}
function getRooms() {
   
    $.ajax({
        url: "index.php?page=prikazSoba",
        method: "GET",
        dataType: "json",
        success: function (sobe) {
            printRooms(sobe);
            printRoomsForAdmin(sobe);
           
        },
        error: function (xhr, status, error){
           
        }

    })
};
function printRoomsForAdmin(sobe) {
    let html = "";

    sobe.forEach(s =>{
        
        html += `
     <tr>
        <td>${s.idSoba}</td>
        <td>${s.nazivSoba}</td>
        <td>${s.opis}</td>
        <td><img src="${s.src}" alt="${s.alt}"></td>
        <td>${s.broj_soba}</td>
        <td>${s.broj_osoba}</td>
        <td>${s.cena}</td>
        <td>${s.zvezdice}</td>
        
        <td><a class= 'deletes' data-id=${s.idSoba}">Delete</a></td>
       </tr>
        `;
    });

    $("#sobeee").html(html);
}

function printRooms(sobe) {
    let html = "";

    sobe.forEach(r =>{
        
        html += `
        <div class="room-grid">
        <div class="grid-image">
            <img src="${r.src}" alt="${r.alt}">
        </div>
        <div class="grid-content">
            <div class="room-title">
                <h4>${r.nazivSoba}</h4>
                <p class="mar-top-5"><i class="fa fa-tag"></i>  ${r.cena}/Night</p>
                <div class="deal-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
            </div>
            <div class="room-detail">
                <p>${r.opis}</p>
            </div>
           
            <div class="room-services">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <i class="fa fa-bed" aria-hidden="true"></i>${r.broj_soba} Bedrooms
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                    </div>
                </div>
            </div>

            <div class="form-btn mar-top-35">
            <a class="btn btn-orange"><button data-id='${r.idSoba}' id='book'>BOOK NOW</button></a>
        </div>
        </div>
    </div>
        `;
    });
    

    $("#sobe").html(html);
    $("#reservation").hide();
    $(document).on("click","#book",function() {
        let idS=$(this).data('id');
        $.ajax({
            url: "index.php?page=dohvatiSobuJednu",
            method: "POST",
            dataType: "json",
            data:{
                idS:idS
            },
            success: function (d) {
                $("#reservation").show();
                let html = "";
               for(let j of d){
                console.log(j.src);
                
                html+=`<div class="booking-image">
                <img src="${j.src}" alt="${j.alt}">
                <div class="booking-title">
                    <div class="title-left">
                        <h3>${j.nazivSoba}</h3>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <div class="title-right pull-right">
                        <div class="title-price">
                            <h4 class="pad-top-15"><a href="#">${j.cena}<span>/Night</span></a></h4>
                        </div>
                       
                    </div>
                </div> 
            </div>
            
            <div class="booking-desc mar-top-50">
            <div class="sidebar-reservation" id="reservation">
                                <h3>Your reservation</h3>
                                <div class="reservation-detail">
                                <input type='hidden' id='hdnSoba' data-id='${j.idSoba}'>
                                
                                    <div class="rd-top">
                                  
                                        <div class="rd-box">
                                            <label>Check in</label>
                                            <input type='date' id='in'/>
                                        </div>
                                        <div class="rd-box">
                                            <label>Check out</label>
                                            <input type='date' id='out'/>
                                        </div>
                                    </div>
                                    <div class="rd-top">
                                        
                                    </div>
                                </div>
                                <table class="reservation-table table">
                                    <tbody>
                                       
                                       
                                    </tbody>
                                 
                                </table>
                            </div>
           
           
        </div> 
        <div class="card-btn">
       <button id='klik' name='confirm'> <a href="#" class="btn btn-orange">CONFIRM BOOKING</a></button>
       <div id='res'></div>
    </div>       
    
    `
            }
            $('#upisi').html(html);
            $('#klik').click(function(){
                let idKor= $('#hidnId').data('id');
               let idSobe= $('#hdnSoba').data('id');
               let od=$('#in').val();
               let out= $('#out').val();
              $.ajax({
                url:'index.php?page=posaljiR',
                method:'POST',
                data:{
                    idKor:idKor,
                    idSobe:idSobe,
                    od:od,
                    out:out,
                    kliknutaRez:true
                },
                success:function(){
                 console.log("bravo");
                 $('#res').html('<h1>Booked!</h1>');
                 $('#klik').hide();
                },
                error:function(xhr, status, error){
                 console.log(error);
                }
              })
            })
        },
        error: function (xhr, status, error) {
           
        }


        });
        // function printRoomONe(d){
        
        //     html += `   <div class="booking-image">
        // <img src="${d.src}" alt="image">
        // <div class="booking-title">
        //     <div class="title-left">
        //         <h3>Luxury King Room</h3>
        //         <div class="rating">
        //             <span class="fa fa-star checked"></span>
        //             <span class="fa fa-star checked"></span>
        //             <span class="fa fa-star checked"></span>
        //             <span class="fa fa-star checked"></span>
        //             <span class="fa fa-star checked"></span>
        //         </div>
        //     </div>
        //     <div class="title-right pull-right">
        //         <div class="title-price">
        //             <h4 class="pad-top-15"><a href="#">$1200<span>/Night</span></a></h4>
        //         </div>
        //     </div>
        // </div>
        // </div>`;
        
        
        // }
        // $('#probica').html(html);
        
    })
  
    

}

 function getCategories() {
       $.ajax({
       url: "index.php?page=prikazK",
         method: "GET",
         dataType: "json",
         success: function (kategorije) {
              printCat(kategorije);
              printCatForAdmin(kategorije);
           
        },
         error: function (xhr, status, error){
           
        }

     })
 };
 function printCat(kategorije) {
     let html = "";

     kategorije.forEach(k =>{
        
        html += `
        <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                     <input type="checkbox" value="${k.IdKategorija}" name="kategorije"//>
                                     <div data-id='${k.IdKategorija}' class="state p-warning-o" id='kat'>
                                         <label>${k.nazivKategorija}</label>
                                    </div>
                                </div>
        `;
    });

     $("#kat").html(html);
 }

 function getServices() {
    $.ajax({
    url: "index.php?page=ajde",
      method: "GET",
      dataType: "json",
      success: function (servisi) {
           printService(servisi);
        
     },
      error: function (xhr, status, error){
        
     }

  })
};
function printService(servisi ) {
  let html = "";

  servisi.forEach(s =>{
     
     html += `
     <div class="pretty p-default p-thick p-pulse mar-bottom-15" id='ser'>
                                    <input type="checkbox" />
                                    <div data id='${s.idServis}'class="state p-warning-o">
                                        <label>${s.nazivServis}</label>
                                    </div>
                                </div>
     `;
 });

  $("#ser").html(html);
}
function registrationUserA() {
   
    let fnameA = $("#fnameA").val();
    let lnameA = $("#lnameA").val();
    let unameA = $("#unameA").val();
    let mailA = $("#mailA").val();
    let passA = $("#passA").val();
    let cpassA = $("#cpassA").val();
    
    $pFirstname=/^[A-Z]{1}[a-z]{2,25}$/;
    $pLastname=/^[A-Z]{1}[a-z]{2,25}$/;
    $pUsername=/^[a-zA-Z][a-zA-Z0-9-_]{3,32}$/;// a-z A-Z - I _
    $PPassword=/^(?=.*\d).{6,}$/;// brojevi, donje, slova
    $pEmail=/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    
     //PROVERE 
     $marker=0; //ako je 1 IMA GRESAKA
     if(fnameA.match($pFirstname)){
         $('#fGA').html('');
      }
     else if(fnameA==""){
         $('#fGA').html( 'Firstname is required field');
         $marker=1;
      }
     else{
         $("#fGA").html("Firstname is not in good format");
         $marker=1;
      }
      //llastname
      if(lnameA.match($pLastname)){
          $('#lGA').html( '');
      }
      else if(lnameA==""){
          $('#lGA').html( 'Lastname is required field');
          $marker=1;
      }
      else{
          $("#lGA").html("Lastname is not in good format");
          $marker=1;
      }
      //username
      if(unameA.match($pUsername)){
          $('#uGA').html( '');
      }
      else if(unameA==""){
          $('#uGA').html( 'Username is required field');
          $marker=1;
      }
      else{
          $("#uGA").html("Username is not in good format");
          $marker=1;
      }
      //PASSWORD
      if(passA.match($PPassword)){
          $('#pGA').html( '');
      }
      else if(passA==""){
          $('#pGA').html( 'Password is required field');
          $marker=1;
      }
      else{
          $("#pGA").html("Password is not in good format");
          $marker=1;
      }
      //REPASS
      if(cpassA!=passA){
          $("#rPGA").html("Passwords must match");
          $marker=1;
      }
      if(cpassA==''){
          $("#rPGA").html('');
      }
      else if(cpassA==""){
          $("#rPGA").html('You must repeat password');
      }
      if(mailA.match($pEmail)){
          $('#eGA').html( '');
      }
      else if(mailA==""){
          $('#eGA').html( 'Email is required field');
          $marker=1;
      }
      else{
          $("#eGA").html("Email is not in good format");
          $marker=1;
      }
      console.log($marker);
if($marker==0){
   
   
   $.ajax({
       url:'index.php?page=registerUserA',
       method:'POST',
       data:{
           fnameA:fnameA,
           lnameA:lnameA,
           unameA:unameA,
           mailA:mailA,
           passA:passA,
           kliknutoA:true
       },
       success:function(){
        console.log(BRAVO);
        $("#feedA").html("<h2>New user added!</h2>");
        $("#sendIdA").hide();

       },
       error:function(xhr, status, error){
        console.log(error);
       }
   })
}
}

function printCatForAdmin(kategorije) {
  let html = "";

  kategorije.forEach(ka =>{
     
     html += `
    
  <option name='katS' value="${ka.IdKategorija}">${ka.nazivKategorija}</option>
  

     `;
 });

  $("#kategorijaa").html(html);
 
}
function getUsers() {
   
    $.ajax({
        url: "index.php?page=probajKorisnike",
        method: "GET",
        dataType: "json",
        success: function (data) {
            printUsers(data);
        },
        error: function (xhr, status, error) {
           
        }

    });
}

function printUsers(data) {
    let html = "";

    data.forEach(u =>{
        
        html += `
     <tr>
        <td>${u.idKorisnik}</td>
        <td>${u.ime}</td>
        <td>${u.prezime}</td>
        <td>${u.uloga}</td>
      

        <td><a class= 'deleteK' data-id="${u.idKorisnik}">Delete</a></td></tr>
       
        `;
    });

    $("#korisnici").html(html);
}
function getMessages() {
   
    $.ajax({
        url: "index.php?page=probajPoruke",
        method: "GET",
        dataType: "json",
        success: function (data) {
            printPoruke(data);
        },
        error: function (xhr, status, error) {
           
        }

    });
}

function printPoruke(data) {
    let html = "";

    data.forEach(p =>{
        
        html += `
       
        <h3>${p.poruka}</h3><p> user ${p.ime} ${p.prezime} , with id ${p.idKorisnik}</p>
     
        `;
    });

    $("#poruke").html(html);
}

$("#kat").change(function(){//filter checkboxova

let kategorije = $("input[name='kategorije']:checked");
        let selectedCategories = [];

        for(let kategorija of kategorije){
            selectedCategories.push(kategorija.value);
        }
        console.log(selectedCategories);
        $.ajax({
            url: 'index.php?page=probajCheck',
            method: 'POST',
            data: {
               
                kategorije: selectedCategories,
                send: true
            },
            success: function(data, status, xhr){
                console.warn("Bravo");
              
            },
            error: function(xhr, status, statusText){
                console.error('----> ERROR <----');
                console.log(xhr);
            }
        })
    } );
    // $("#rangeCena").mousemove(function(){

    //     let min = $("span#min.min-value").val();
    //     let max = $("#max").val();
               
    //             console.log(min ,max);
    //             $.ajax({
    //                 url: 'index.php?page=probajRange',
    //                 method: 'POST',
    //                 data: {
                       
    //                     min:min,
    //                     max:max,
    //                     okej:true
    //                 },
    //                 success: function(data, status, xhr){
    //                     console.warn("Bravo");
                      
    //                 },
    //                 error: function(xhr, status, statusText){
    //                     console.error('----> ERROR <----');
    //                     console.log(xhr);
    //                 }
    //             })
    //         } );
$('#filtriraj').click(function(){
    let brojGostiju=$('#guests').val();
    
    $.ajax({
        url:'index.php?page=available',
        method:'POST',
        dataType:'json',
        data:{
            brojGostiju:brojGostiju,
           
            poslato:true
        },
        success:function(data){
          printRooms(data);
        },
        error:function(xhr,greska,status){
            alert(greska);
        }
    })
})
