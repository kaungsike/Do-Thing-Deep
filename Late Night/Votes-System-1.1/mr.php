
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/fingerprintjs@3.3.0/dist/fp.min.js"></script>

</head>
<body>
    
</body>
<script>
  // Initialize FingerprintJS
  FingerprintJS.load().then(fp => {
    fp.get().then(result => {
      // Send the fingerprint (a unique identifier) to the server
      const fingerprint = result.visitorId;
      
      // You can also capture other user data like email or phone
      const email = document.getElementById('email').value;

      console.log(fingerprint);
      
      // Send this data to your PHP server for validation
      fetch('validate_vote.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `fingerprint=${fingerprint}&email=${email}`
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Vote successfully recorded!');
        } else {
          alert(data.message);
        }
      });
    });
  });
</script>

</html>