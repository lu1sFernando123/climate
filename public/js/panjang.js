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
      <td>${item.pressure_388}</td>
      <td>${item.phsensor}</td>
      <td>${item.windvane}</td>
      <td>${item.pressure_280}</td>
      <td>${item.rainstatus}</td>
      <td>${item.pressure_280}</td>
      <td>${item.rainstatus}</td>
    `;
  });
}

function getColorBasedOnValue(value, parameter) {
  if (parameter === "co") {
    if (value <= 50) {
      return "green"; // Warna hijau untuk nilai di bawah atau sama dengan 50
    } else if (value <= 100) {
      return "blue"; // Warna biru untuk nilai antara 51 hingga 100
    } else if (value <= 200) {
      return "yellow"; // Warna kuning untuk nilai antara 101 hingga 200
    } else if (value <= 300) {
      return "red"; // Warna merah untuk nilai antara 201 hingga 300
    } else {
      return "black"; // Warna hitam untuk nilai di atas 300
    }
  } else if (parameter === "wind speed") {
    if (value < 2) {
      return "blue"; // Tenang, warna biru
    } else if (value >= 2 && value <= 3) {
      return "green"; // Angin sejuk, warna hijau
    } else if (value >= 4 && value <= 16) {
      return "yellow"; // Angin kuat, warna kuning
    } else if (value >= 17 && value <= 21) {
      return "red"; // Angin sangat kuat, warna merah
    } else {
      return "black"; // Topan, warna hitam
    }
  } else if (parameter === "irradiation") {
    if (value >= 200 && value <= 250) {
      return "green"; // Warna hijau untuk nilai antara 200 hingga 250
    } else if (value >= 251 && value <= 300) {
      return "yellow"; // Warna kuning untuk nilai antara 251 hingga 300
    } else if (value >= 301 && value <= 350) {
      return "red"; // Warna merah untuk nilai antara 301 hingga 350
    } else if (value >= 351 && value <= 400) {
      return "black"; // Warna hitam untuk nilai antara 351 hingga 400
    }
  } else if (parameter === "rainfall") {
    if (value === 0) {
      return "gray"; // Abu-abu untuk nilai 0 (berawan)
    } else if (value > 0 && value <= 0.5) {
      return "blue"; // Biru untuk hujan ringan (0.5 mm - 20 mm)
    } else if (value > 0.5 && value <= 20) {
      return "green"; // Hijau untuk hujan sedang (21 mm - 50 mm)
    } else if (value > 20 && value <= 50) {
      return "yellow"; // Kuning untuk hujan lebat (51 mm - 100 mm)
    } else if (value > 50 && value <= 150) {
      return "red"; // Merah untuk hujan lebat (101 mm - 150 mm)
    } else {
      return "black"; // Hitam untuk hujan ekstrem (151 mm ke atas)
    }
  } else if (parameter === "no2") {
    if (value >= 0.05 && value <= 1) {
      return "blue"; // Warna biru untuk nilai antara 0.05 hingga 1
    } else if (value >= 2 && value <= 4) {
      return "green"; // Warna hijau untuk nilai antara 2 hingga 4
    } else if (value >= 5 && value <= 7) {
      return "yellow"; // Warna kuning untuk nilai antara 5 hingga 7
    } else if (value >= 8 && value <= 9) {
      return "red"; // Warna merah untuk nilai antara 8 hingga 9
    } else if (value >= 10) {
      return "black"; // Warna hitam untuk nilai di atas 10
    } else {
      return "default-color"; // Warna default jika nilai di luar rentang yang diberikan
    }
  } else if (parameter === "c2h5oh") {
    if (value >= 10 && value <= 70) {
      return "blue"; // Warna biru untuk nilai antara 10 hingga 70
    } else if (value >= 71 && value <= 170) {
      return "green"; // Warna hijau untuk nilai antara 71 hingga 170
    } else if (value >= 171 && value <= 270) {
      return "yellow"; // Warna kuning untuk nilai antara 171 hingga 270
    } else if (value >= 271 && value <= 400) {
      return "red"; // Warna merah untuk nilai antara 271 hingga 400
    } else if (value >= 401 && value <= 500) {
      return "black"; // Warna hitam untuk nilai antara 401 hingga 500
    }
  } else if (parameter === "h2") {
    if (value >= 1 && value <= 100) {
      return "blue"; // Warna biru untuk nilai antara 1 hingga 100
    } else if (value >= 101 && value <= 300) {
      return "green"; // Warna hijau untuk nilai antara 101 hingga 300
    } else if (value >= 301 && value <= 600) {
      return "yellow"; // Warna kuning untuk nilai antara 301 hingga 600
    } else if (value >= 601 && value <= 800) {
      return "red"; // Warna merah untuk nilai antara 601 hingga 800
    } else if (value >= 801 && value <= 1000) {
      return "black"; // Warna hitam untuk nilai antara 801 hingga 1000
    } else {
      return "default-color"; // Warna default jika nilai di luar rentang yang diberikan
    }
  } else if (parameter === "ch4") {
    if (value <= 1000) {
      return "gray"; // Warna abu-abu jika nilai di bawah atau sama dengan 1000
    } else {
      return "green"; // Warna hijau jika nilai di atas 1000
    }
  } else if (parameter === "nh3") {
    if (value <= 100) {
      return "blue"; // Warna biru untuk nilai di bawah atau sama dengan 100
    } else if (value <= 200) {
      return "green"; // Warna hijau untuk nilai antara 101 hingga 200
    } else if (value <= 300) {
      return "yellow"; // Warna kuning untuk nilai antara 201 hingga 300
    } else if (value <= 400) {
      return "red"; // Warna merah untuk nilai antara 301 hingga 400
    } else {
      return "black"; // Warna merah untuk nilai di atas 400
    }
  } else if (parameter === "temperature") {
    if (value >= -30 && value <= 0) {
      return "blue"; // Warna biru untuk nilai antara -30 hingga 0
    } else if (value >= 1 && value <= 30) {
      return "green"; // Warna hijau untuk nilai antara 1 hingga 30
    } else if (value >= 31 && value <= 50) {
      return "yellow"; // Warna kuning untuk nilai antara 31 hingga 50
    } else if (value >= 51 && value <= 80) {
      return "red"; // Warna merah untuk nilai antara 51 hingga 80
    } else if (value >= 81) {
      return "black"; // Warna hitam untuk nilai di atas 80
    } else {
      return "default-color"; // Warna default jika nilai di luar rentang yang diberikan
    }
  } else if (parameter === "humidity") {
    if (value >= 5 && value <= 20) {
      return "blue"; // Warna biru untuk nilai antara 5 hingga 20
    } else if (value >= 21 && value <= 40) {
      return "green"; // Warna hijau untuk nilai antara 21 hingga 40
    } else if (value >= 41 && value <= 60) {
      return "yellow"; // Warna kuning untuk nilai antara 41 hingga 60
    } else if (value >= 61 && value <= 90) {
      return "red"; // Warna merah untuk nilai antara 61 hingga 90
    } else if (value > 90) {
      return "black"; // Warna hitam untuk nilai di atas 90
    } else {
      return "default-color"; // Warna default jika nilai di luar rentang yang diberikan
    }
  } else {
    return "default-color"; // Handle parameter lain jika diperlukan
  }
}

function updateGauge(elementId, value, parameter) {
  const backgroundColor = getColorBasedOnValue(value, parameter);
  document.getElementById(elementId).innerText = value.toFixed(2);
  document.getElementById(elementId).style.backgroundColor = backgroundColor;
  document.getElementById(elementId).style.borderRadius = "25px"
  document.getElementById(elementId).style.color = "white";
}


function updateGauges(data) {
  const irradiationValue = parseFloat(data.result[0].pressure_280);
  const coValue = parseFloat(data.result[0].phsensor);
  const temperatureValue = parseFloat(data.result[0].temperature_280);
  const humidityValue = parseFloat(data.result[0].humidity_280);
  const waterTemperatureValue = parseFloat(data.result[0].phsensor);
  const windSpeedValue = parseFloat(data.result[0].windvane);
  const rainfallValue = parseFloat(data.result[0].rainfall);
  const no2Value = parseFloat(data.result[0].no2);
  const nh3Value = parseFloat(data.result[0].nh3);
  const c2h5ohValue = parseFloat(data.result[0].c2h5oh);
  const h2Value = parseFloat(data.result[0].h2);
  const ch4Value = parseFloat(data.result[0].ch4);

  updateGauge("irradiation", irradiationValue, "irradiation");
  updateGauge("co", coValue, "co");
  updateGauge("temperature", temperatureValue, "temperature");
  updateGauge("humidity", humidityValue, "humidity");
  updateGauge("wind speed", windSpeedValue, "wind speed");
  updateGauge("rainfall", windSpeedValue, "rainfall");
  updateGauge("no2", waterTemperatureValue, "no2");
  updateGauge("nh3", waterTemperatureValue, "nh3");
  updateGauge("c2h5oh", waterTemperatureValue, "c2h5oh");
  updateGauge("h2", irradiationValue, "h2");
  updateGauge("ch4", irradiationValue, "ch4");
}

// Contoh pemanggilan fungsi updateGauges dengan data palsu
const dummyData = {
  result: [
    {
      pressure_280: 15,
      pressure_388: 30,
      temperature_280: 80,
      humidity_280: 40,
      phsensor: 110,
      windvane: 200,
    },
  ],
};

updateGauges(dummyData);

function updateCharts(data) {
  const labels = data.result.map((item) => item.datetime);
  const datasets = [
    {
      label: "Temperature (°C)",
      data: data.result.map((item) => item.temperature_280),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.temperature_280, "temperature")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "Humidity (%)",
      data: data.result.map((item) => item.humidity_280),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.humidity_280, "humidity")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "CO2",
      data: data.result.map((item) => item.pressure_388),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.pressure_388, "co")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "Water Temperature",
      data: data.result.map((item) => item.phsensor),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.phsensor, "water temperature")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "Wind Speed",
      data: data.result.map((item) => item.windvane),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.windvane, "wind speed")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "Irradiation",
      data: data.result.map((item) => item.pressure_280),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.pressure_280, "irradiation")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "Rainfall",
      data: data.result.map((item) => item.rainstatus),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.rainstatus, "rainfall")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "NO2",
      data: data.result.map((item) => item.no2),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.no2, "no2")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "NH3",
      data: data.result.map((item) => item.nh3),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.nh3, "nh3")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "C2H5OH",
      data: data.result.map((item) => item.c2h5oh),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.c2h5oh, "c2h5oh")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "H2",
      data: data.result.map((item) => item.h2),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.h2, "h2")
      ),
      borderWidth: 1,
      fill: false,
    },
    {
      label: "CH4",
      data: data.result.map((item) => item.ch4),
      borderColor: data.result.map((item) =>
        getColorBasedOnValue(item.ch4, "ch4")
      ),
      borderWidth: 1,
      fill: false,
    },
  ];

  // Menggambar grafik secara dinamis
  const chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
  };

  // Menggambar grafik temperatur
  var temperatureCtx = document
    .getElementById("temperatureChart")
    .getContext("2d");
  new Chart(temperatureCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[0]],
    },
    options: chartOptions,
  });

  // Menggambar grafik kelembaban
  var humidityCtx = document.getElementById("humidityChart").getContext("2d");
  new Chart(humidityCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[1]],
    },
    options: chartOptions,
  });

  // Menggambar grafik CO2
  var co2Ctx = document.getElementById("coChart").getContext("2d");
  new Chart(co2Ctx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[2]],
    },
    options: chartOptions,
  });

  // Menggambar grafik Water Temperature
  var waterTemperatureCtx = document
    .getElementById("waterTemperatureChart")
    .getContext("2d");
  new Chart(waterTemperatureCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[3]],
    },
    options: chartOptions,
  });

  // Menggambar grafik Wind Speed
  var windSpeedCtx = document.getElementById("windSpeedChart").getContext("2d");
  new Chart(windSpeedCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[4]],
    },
    options: chartOptions,
  });

  // Menggambar grafik Irradiation
  var irradiationCtx = document
    .getElementById("irradiationChart")
    .getContext("2d");
  new Chart(irradiationCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[5]],
    },
    options: chartOptions,
  });

  // Menggambar grafik Rainfall
  var rainfallCtx = document.getElementById("rainfallChart").getContext("2d");
  new Chart(rainfallCtx, {
    type: "line",
    data: {
      labels: labels,
      datasets: [datasets[6]],
    },
    options: chartOptions,
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
