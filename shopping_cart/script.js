// Fungsi untuk menampilkan rating
function displayRating(rating) {
    const ratingMessage = document.getElementById('rating-message');
    ratingMessage.textContent = `Anda memberikan rating: ${rating}`;
  }
  
  // Fungsi untuk melakukan rating
  function rateProduct(rating) {
    switch (true) {
      case rating === 1:
        // Logika untuk rating 1
        // Lakukan tindakan tertentu sesuai kebutuhan
        displayRating(1);
        break;
      case rating === 2:
        // Logika untuk rating 2
        // Lakukan tindakan tertentu sesuai kebutuhan
        displayRating(2);
        break;
      case rating === 3:
        // Logika untuk rating 3
        // Lakukan tindakan tertentu sesuai kebutuhan
        displayRating(3);
        break;
      case rating === 4:
        // Logika untuk rating 4
        // Lakukan tindakan tertentu sesuai kebutuhan
        displayRating(4);
        break;
      case rating === 5:
        // Logika untuk rating 5
        // Lakukan tindakan tertentu sesuai kebutuhan
        displayRating(5);
        break;
      default:
        // Logika untuk rating lainnya
        // Lakukan tindakan default jika perlu
        break;
    }
  }
  