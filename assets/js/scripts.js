$(document).ready(function() {

  // bagian 404 dan easteregg hehe
  $('#goHome').click(function() {
      window.location.href = '/index.php?page=home';
  });

  $('#easteregg').click(function() {
      window.location.href = '/index.php?page=easteregg';
  });

  // bagian Account page
  // Login Submit btn
  $('#loginForm').submit(function(e) {
      e.preventDefault();
      alert('Login successful for ' + $('#loginEmail').val());
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
  });
  // SignUp Submit btn
  $('#signupForm').submit(function(e) {
      e.preventDefault();
      alert('Sign-Up successful for ' + $('#signupEmail').val());
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
  });
  // Google Submit btn
  $('#googleLogin').click(function() {
      alert('Login successful with Google');
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
      // window.location.href = 'https://accounts.google.com/o/oauth2/auth?...'; // kalau mau pake tinggal daftarin ke google, ubah linknya
  });
  // Facebook Submit btn
  $('#facebookLogin').click(function() {
      alert('Login successful with Facebook');
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
      // window.location.href = 'https://www.facebook.com/v10.0/dialog/oauth?...'; // kalau mau pake tinggal daftarin, ubah linknya
  });
  // Github Submit btn
  $('#githubSignup').click(function() {
      alert('Login successful with Github');
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
      // window.location.href = 'https://github.com/login/oauth/authorize?...'; // kalau mau pake tinggal daftarin, ubah linknya
  });
  // Apple Submit btn
  $('#appleSignup').click(function() {
      alert('Login successful with Apple');
      window.location.href = '/index.php?page=home';
      $('#account-name').text('Tychefida');
      // window.location.href = 'https://appleid.apple.com/auth/authorize?...';  // kalau mau pake tinggal daftarin, ubah linknya
  });

  $('#trasaction-btn').click(function() {
      window.location.href = '/index.php?page=transaction';
  });

  //ini buat bagian about our clients saat imagenya lebih banyak bakal auto rotasi.
  $('#clientCarousel1, #clientCarousel2').carousel({
      interval: 2000, // 2 seconds
      ride: 'carousel',
  });

  // buat otomatis load bagian homepage yang category
  const defaultFile = $('.category-btn.active').data('category');
  $('#category-content').load(defaultFile);

  $('.category-btn').click(function() {
      $('.category-btn').removeClass('active'); //tuker class active
      $(this).addClass('active');

      const file = $(this).data('category');

      $('#category-content').load(file);
  });

  $('.btn-primary').hover(
      function() {
          $(this).css('background-color', '#0056b3');
      },
      function() {
          $(this).css('background-color', '#007bff');
      }
  );

  $('#contact-us').click(function() {
      const whatsappLink = "https://api.whatsapp.com/send/?phone=++6281320398648&text=Hello!%20I%20am%20interested%20in%20your%20CCTV%20services.%20Can%20you%20provide%20more%20details?";
      window.open(whatsappLink, '_blank');
  });
  
});