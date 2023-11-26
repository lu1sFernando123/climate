function updateTable(data) {
  const tableBody = document.querySelector("#table tbody");
  tableBody.innerHTML = ""; // Mengosongkan tabel sebelum memasukkan data baru

  // Memotong array data menjadi 10 item pertama dan memasukkan ke dalam tabel
  data.result.slice(0, 10).forEach((item) => {
    const row = tableBody.insertRow();
    row.innerHTML = `
      <td>${item.time}</td>
      <td>${item.temperature}</td>
      <td>${item.humidity}</td>
      <td>${item.rainfall}</td>
      <td>${item.wind_direction}</td>
      <td>${item.wind_direction_degrees}</td>
      <td>${item.wind_speed}</td>
      <td>${item.irradiation}</td>
      <td>${item.co}</td>
      <td>${item.ch4}</td>
      <td>${item.c2h5oh}</td>
      <td>${item.h2}</td>
      <td>${item.nh3}</td>
      <td>${item.no2}</td>
    `;
  });
}

function getColorBasedOnValue(value, parameter) {
  if (parameter === "co") {
    if (value <= 50) {
      return "blue"; // Warna hijau untuk nilai di bawah atau sama dengan 50
    } else if (value <= 100) {
      return "green"; // Warna biru untuk nilai antara 51 hingga 100
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
    if (value >= 0 && value <= 200) {
      return "blue"; // Abu-abu untuk nilai 0 (berawan)
    } else if (value >= 200 && value <= 300) {
      return "green"; 
    } else if (value >= 301 && value <= 400) {
      return "yellow"; 
    } else if (value >= 401 && value <= 500) {
      return "red"; 
    } else if (value >= 501 ) {
      return "black"; //
    }
  } else if (parameter === "rainfall") {
    if (value === 0) {
      return "blue"; // Biru untuk tidak ada hujan
    } else if (value > 0 && value <= 0.5) {
      return "green"; // Hijau untuk hujan ringan (1 mm - 20 mm)
    } else if (value > 0.5 && value <= 20) {
      return "yellow"; // Kuning untuk hujan sedang (21 mm - 50 mm)
    } else if (value > 21 && value <= 50) {
      return "orange"; // Oranye untuk hujan lebat (51 mm - 100 mm)
    } else if (value > 51 && value <= 150) {
      return "red"; // Merah untuk hujan sangat lebat (101 mm - 150 mm)
    } else {
      return "black"; // Hitam untuk hujan ekstrem (151 mm ke atas)
    }  
  } else if (parameter === "no2") {
    if (value >= 0 && value <= 1) {
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
    if (value >= 0 && value <= 70) {
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
    if (value >= 0 && value <= 100) {
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
      return "blue"; // Warna abu-abu jika nilai di bawah atau sama dengan 1000
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
  document.getElementById(elementId).style.borderRadius = "25px";
  document.getElementById(elementId).style.color = "white";
}

function updateGauges(data) {
  const irradiationValue = parseFloat(data.result[0].irradiation);
  const coValue = parseFloat(data.result[0].co);
  const temperatureValue = parseFloat(data.result[0].temperature);
  const humidityValue = parseFloat(data.result[0].humidity);
  const windSpeedValue = parseFloat(data.result[0].wind_speed);
  const rainfallValue = parseFloat(data.result[0].rainfall);
  const no2Value = parseFloat(data.result[0].no2);
  const nh3Value = parseFloat(data.result[0].nh3);
  const c2h5ohValue = parseFloat(data.result[0].c2h5oh);
  const h2Value = parseFloat(data.result[0].h2);
  const ch4Value = parseFloat(data.result[0].ch4);
  const wind_directionValue = parseFloat(data.result[0].wind_direction);

  updateGauge("irradiation", irradiationValue, "irradiation");
  updateGauge("co", coValue, "co");
  updateGauge("temperature", temperatureValue, "temperature");
  updateGauge("humidity", humidityValue, "humidity");
  updateGauge("wind speed", windSpeedValue, "wind speed");
  updateGauge("rainfall", rainfallValue, "rainfall");
  updateGauge("no2", no2Value, "no2");
  updateGauge("nh3", nh3Value, "nh3");
  updateGauge("c2h5oh", c2h5ohValue, "c2h5oh");
  updateGauge("h2", h2Value, "h2");
  updateGauge("ch4", ch4Value, "ch4");
}

// Contoh pemanggilan fungsi updateGauges dengan data palsu
const dummyData = {
  result: [
    {
      pressure_280: 15,
      pressure_388: 30,
      temperature: 80,
      humidity: 40,
      phsensor: 110,
      windvane: 200,
    },
  ],
};

updateGauges(dummyData);

function updateCharts(data) {
  // Reverse the order of the labels array to display the latest timestamp on the left
  const labels = data.result.map((item) => item.time).reverse();

  const createDataset = (label, dataKey, colorKey) => ({
    label: label,
    data: data.result.map((item) => item[dataKey]).reverse(),
    borderColor: data.result
      .map((item) => getColorBasedOnValue(item[dataKey], colorKey))
      .reverse(),
    borderWidth: 2,
    fill: false,
    pointRadius: 5,
    pointHoverRadius: 7,
  });

  const datasets = [
    createDataset("Temperature (°C)", "temperature", "temperature"),
    createDataset("Humidity (%)", "humidity", "humidity"),
    createDataset("CO", "co", "co"),
    createDataset("NO2", "no2", "no2"),
    createDataset("Wind Speed", "wind_speed", "windSpeed"),
    createDataset("Irradiation", "irradiation", "irradiation"),
    createDataset("Rainfall", "rainfall", "rainfall"),
    createDataset("NH3", "nh3", "nh3"),
    createDataset("C2H5OH", "c2h5oh", "c2h5oh"),
    createDataset("H2", "h2", "h2"),
    createDataset("CH4", "ch4", "ch4"),
  ];

  const chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        type: 'linear', // Use linear scale for timestamps
        position: 'bottom',
      },
    },
    plugins: {
      legend: {
        display: true,
        position: 'top',
      },
      tooltip: {
        mode: 'index',
        intersect: false,
      },
    },
  };

  drawChart("temperatureChart", [datasets[0]], labels, temperature);
  drawChart("humidityChart", [datasets[1]], labels, humidity);
  drawChart("coChart", [datasets[2]], labels, co);
  drawChart("no2Chart", [datasets[3]], labels, no2);
  drawChart("windSpeedChart", [datasets[4]], labels, ); // Use the same options for all charts
  drawChart("irradiationChart", [datasets[5]], labels, irradiation);
  drawChart("rainfallChart", [datasets[6]], labels, rainfall);
  drawChart("nh3Chart", [datasets[7]], labels, nh3);
  drawChart("c2h5ohChart", [datasets[8]], labels, c2h5oh);
  drawChart("h2Chart", [datasets[9]], labels, h2);
  drawChart("ch4Chart", [datasets[10]], labels, ch4);
}

function drawChart(canvasId, datasets, labels, options) {
  var ctx = document.getElementById(canvasId).getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: labels,
      datasets: datasets,
    },
    options: options,
  });
}



async function fetchDataAndUpdate() {
  try {
    const response = await fetch("https://vps.isi-net.org:9300/climate/latest2");
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


// Panggil fetchDataAndUpdate untuk pertama kali
fetchDataAndUpdate();
