$(document).ready(function(){
  console.log("i am ready");
});

function single(id)
{
  window.location.href = "/singlePost/post-id="+id;
}

// function single(id){
//   debugger;
//     $.ajax({
//       type: "POST",
//       url: "/post-view",
//       data: {
//         id:id
//       },
//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//       success: function (data) {
          
//       },
//       error: function (error) {
//         alert("Something went wrong !");
//       }
//   });
// }
