
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

 $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });


 $( ".ms-form" ).submit(function( event ) {

event.preventDefault(); 
  var link= $(this).attr('action');
  

  //var formData = new FormData($(this));


  //var formData = new FormData($(this));
         var  formData=new FormData($(this)[0]);
         //   console.log(formData);
            $.ajax({
                url: link,  //server script to process data
                type: 'POST',
                xhr: function() {  // custom xhr
                    myXhr = $.ajaxSettings.xhr();
                    if(myXhr.upload){ // if upload property exists
                       // myXhr.upload.addEventListener('progress', progressHandlingFunction, false); // progressbar
                    }
                    return myXhr;
                },
                // Ajax events
                success: completeHandler = function(data) {
                  alert("Your action taken succefully.!");
                console      
                //    if("redirect" in data){
                   
                //      //localStorage.LastPage = data.redirect;
                //     location.replace(data.redirect);
                   
                //   //  console.log(data->redirect);
                // }else{
                //     $(".ms-process-bar").css("width", "100%");
                //     location.reload();
                // }
                },
                error: errorHandler = function(xhr, status, error) {
                        console.log(error);     
                    alert("Something went wrong!");
                },
                // Form data
                data: formData,
                // Options to tell jQuery not to process data or worry about the content-type
                cache: false,
                contentType: false,
                processData: false
            }, 'json');

 });


 $('.action-btn-post').click(function(event){

  event.preventDefault(); 
   $( ".ms-form" ).submit();

  //console.log(link);
  

 });

