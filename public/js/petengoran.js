// BLOCKK REALTIME
function fetchData() {
    fetch('https://vps.isi-net.org:5000/GetDataGistingNew')
      .then(response => response.json())
      .then(data => {
        // Update tampilan dengan data yang diterima dari server
        console.log(data);
        document.getElementById('irradiation').innerText = data.result[0].pressure_280;
        document.getElementById('co2').innerText = data.result[0].pressure_388;
        document.getElementById('temperature').innerText = data.result[0].temperature_280;
        document.getElementById('humidity').innerText = data.result[0].humidity_280;
        document.getElementById('water temperature').innerText = data.result[0].phsensor;
        document.getElementById('wind speed').innerText = data.result[0].windvane;
      })
      .catch(error => console.error('Error:', error));
  }
// Panggil fungsi fetchData secara berkala setiap 2 detik
setInterval(fetchData, 2000);

// Panggil fetchData untuk pertama kali
fetchData();