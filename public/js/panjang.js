// BLOCKK REALTIME
function fetchData() {
  fetch("https://vps.isi-net.org:5000/GetDataGistingNew")
    .then((response) => response.json())
    .then((data) => {
      // Update tampilan dengan data yang diterima dari server
      console.log(data);
      document.getElementById("irradiation").innerText =
        data.result[0].pressure_280;
      document.getElementById("co2").innerText = data.result[0].pressure_388;
      document.getElementById("temperature").innerText =
        data.result[0].temperature_280;
      document.getElementById("humidity").innerText =
        data.result[0].humidity_280;
      document.getElementById("water temperature").innerText =
        data.result[0].phsensor;
      document.getElementById("wind speed").innerText = data.result[0].windvane;
    })
    .catch((error) => console.error("Error:", error));

  function fetchDataAndPopulateTable() {
    fetch("/fetch-data") // Ganti dengan URL endpoint API Anda
      .then((response) => response.json())
      .then((data) => {
        const tableBody = document.querySelector("#table tbody");
        tableBody.innerHTML = ""; // Kosongkan isi tabel sebelum menambahkan data baru

        // Iterasi melalui data yang diterima dan tambahkan ke tabel
        data.forEach((item) => {
          const row = `<tr>
                                    <th scope="row">${item.id}</th>
                                    <td>${item.time}</td>
                                    <td>${item.temperature}</td>
                                    <td>${item.humidity}</td>
                                    <td>${item.co2}</td>
                                    <td>${item.water_temperature}</td>
                                    <td>${item.wind_speed}</td>
                                    <td>${item.irradiation}</td>
                                    <td>${item.rainfall}</td>
                                </tr>`;
          tableBody.innerHTML += row;
        });
      })
      .catch((error) => console.error("Error:", error));
  }

  // Panggil fungsi fetchDataAndPopulateTable secara berkala setiap 2 detik
  setInterval(fetchDataAndPopulateTable, 2000);

  // Panggil fetchDataAndPopulateTable untuk pertama kali
  fetchDataAndPopulateTable();
}
// Panggil fungsi fetchData secara berkala setiap 2 detik
setInterval(fetchData, 5000);

// Panggil fetchData untuk pertama kali
fetchData();
