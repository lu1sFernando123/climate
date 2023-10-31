function updateTable(data) {
  const tableBody = document.querySelector("#table tbody");
  tableBody.innerHTML = ""; // Mengosongkan tabel sebelum memasukkan data baru

  // Memotong array data menjadi 10 item pertama dan memasukkan ke dalam tabel
  data.result.slice(0, 10).forEach((item) => {
    const row = tableBody.insertRow();
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.datetime}</td>
      <td>${item.temperature_280}</td>
      <td>${item.humidity_280}</td>
      <td>${item.pressure_388}</td>
      <td>${item.phsensor}</td>
      <td>${item.windvane}</td>
      <td>${item.pressure_280}</td>
      <td>${item.rainstatus}</td>
    `;
  });
}

function updateGauges(data) {
  document.getElementById("irradiation").innerText =
    data.result[0].pressure_280;
  document.getElementById("co2").innerText = data.result[0].pressure_388;
  document.getElementById("temperature").innerText =
    data.result[0].temperature_280;
  document.getElementById("humidity").innerText = data.result[0].humidity_280;
  document.getElementById("water temperature").innerText =
    data.result[0].phsensor;
  document.getElementById("wind speed").innerText = data.result[0].windvane;
}

function updateCharts(data) {
  // Mengambil data yang diperlukan dari respons server
  const labels = data.result.slice(0, 10).map((item) => item.datetime);
  const temperatureData = data.result
    .slice(0, 10)
    .map((item) => item.temperature_280);
  const humidityData = data.result
    .slice(0, 10)
    .map((item) => item.humidity_280);
  const co2Data = data.result.slice(0, 10).map((item) => item.pressure_388); // Data CO2
  const waterTemperatureData = data.result
    .slice(0, 10)
    .map((item) => item.phsensor); // Data Water Temperature
  const windSpeedData = data.result.slice(0, 10).map((item) => item.windvane); // Data Wind Speed
  const irradiationData = data.result
    .slice(0, 10)
    .map((item) => item.pressure_280); // Data Irradiation
  const rainfallData = data.result.slice(0, 10).map((item) => item.rainstatus); // Data Rainfall

  // Menggambar grafik temperatur
  var temperatureCtx = document
    .getElementById("temperatureChart")
    .getContext("2d");
  new Chart(temperatureCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Temperature (°C)",
          data: temperatureData,
          borderColor: "rgba(255, 99, 132, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik kelembaban
  var humidityCtx = document.getElementById("humidityChart").getContext("2d");
  new Chart(humidityCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Humidity (%)",
          data: humidityData,
          borderColor: "rgba(54, 162, 235, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik CO2
  var co2Ctx = document.getElementById("co2Chart").getContext("2d");
  new Chart(co2Ctx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "CO2",
          data: co2Data,
          borderColor: "rgba(255, 206, 86, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik Water Temperature
  var waterTemperatureCtx = document
    .getElementById("waterTemperatureChart")
    .getContext("2d");
  new Chart(waterTemperatureCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Water Temperature",
          data: waterTemperatureData,
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik Wind Speed
  var windSpeedCtx = document.getElementById("windSpeedChart").getContext("2d");
  new Chart(windSpeedCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Wind Speed",
          data: windSpeedData,
          borderColor: "rgba(153, 102, 255, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik Irradiation
  var irradiationCtx = document
    .getElementById("irradiationChart")
    .getContext("2d");
  new Chart(irradiationCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Irradiation",
          data: irradiationData,
          borderColor: "rgba(255, 159, 64, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Menggambar grafik Rainfall
  var rainfallCtx = document.getElementById("rainfallChart").getContext("2d");
  new Chart(rainfallCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [
        {
          label: "Rainfall",
          data: rainfallData,
          borderColor: "rgba(255, 99, 132, 1)",
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });
}

async function fetchDataAndUpdate() {
  try {
    const response = await fetch(
      "https://vps.isi-net.org:5000/GetDataGistingNew"
    );
    const data = await response.json();

    // Update tampilan dengan data yang diterima dari server
    console.log(data);

    // Memanggil fungsi pembaruan tampilan secara berurutan
    updateTable(data);
    updateGauges(data);
    updateCharts(data);
  } catch (error) {
    console.error("Error:", error);
  }
}

// Panggil fetchDataAndUpdate secara berkala setiap 2 detik
setInterval(fetchDataAndUpdate, 2000);

// Panggil fetchDataAndUpdate untuk pertama kali
fetchDataAndUpdate();
