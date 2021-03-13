(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

})(jQuery); // End of use strict

//Table with search
$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});


// Add Female Past Medical History table row
$(document).ready(function() {
  $(".add-f-pmh-row").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr><td class='text-center w-5x pt-2'><input type='checkbox' name='record' /></td><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm' /></div></td></tr>";
      $(".f-pmh-table tbody").append(markup);
  });
  /* Find and remove selected table rows */
  $(".delete-f-pmh-row").click(function() {
      $(".f-pmh-table tbody").find('input[name="record"]').each(function() {
          if ($(this).is(":checked")) {
              $(this).parents("tr").remove();
          }
      });
  }); 
});


// Add Female Past Medical History table row
$(document).ready(function() {
  $(".add-f-pmh-row-1").click(function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var markup = "<tr><td class='text-center w-5x pt-2'><input type='checkbox' name='record' /></td><td><div class='form-group mb-0'><input type='text' class='form-control form-control-sm' /></div></td></tr>";
      $(".f-pmh-table-1 tbody").append(markup);
  });
  /* Find and remove selected table rows */
  $(".delete-f-pmh-row-1").click(function() {
      $(".f-pmh-table-1 tbody").find('input[name="record"]').each(function() {
          if ($(this).is(":checked")) {
              $(this).parents("tr").remove();
          }
      });
  }); 
});

function fn2(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#user-image').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function() {
  $("#formCheck-1").click(function() {
      $("#maeswct-submit").attr("disabled", !this.checked);
  })
})

$(document).ready(function(){
  $(".svc-btn").click(function(){
    $(".svc-row").addClass("d-none");
    $(".updt-pwd").removeClass("d-none");
  });
});


const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  this.classList.toggle('fa-eye-slash');
});

const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#password1');

togglePassword1.addEventListener('click', function (e) {
  const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
  password1.setAttribute('type', type);
  this.classList.toggle('fa-eye-slash');
});
