// $(function() {
//     $('#sidebar nav a').click(function() {
//         var $linkClicked = $(this).attr('href');
//         document.location.hash = $linkClicked;
//         var $pageRoot = $linkClicked.replace('#page', '');
//         if (!$(this).hasClass("active")) {
//             $("#sidebar nav a").removeClass("active");
//             $(this).addClass("active");
//             $.ajax({
//                 type: "POST",
//                 url: "classes/load.php",
//                 data: 'page='+$pageRoot,
//                 dataType: "html",
//                 success: function(msg){
//                     if(parseInt(msg)!==0) {
//                         $('#main').html(msg);
//                         $('#main section').hide().fadeIn();
//                         console.log(msg);
//                     }
//                 }
//             });
//         }
//         else {
//             event.preventDefault();
//         }
//     });
// });