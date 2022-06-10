const convertToUpperCase = (words) => {
    const sentences = words.toLowerCase().split(" ");
    return sentences.map((word) => {
        return word[0].toUpperCase() + word.substring(1);
    }).join(" ");
}

// create - edit bantuan sosial
const provinsiElement = document.querySelector("#provinsi");
const kabupatenElement = document.querySelector("#kabupaten");
const kecamatanElement = document.querySelector("#kecamatan");
const desaElement = document.querySelector("#desa");

provinsiElement.addEventListener("change", async () => {
    kabupatenElement.innerHTML = '';

    const provinsi_id = provinsiElement.value.substring(0, 2);
    const response = await fetch(
        "https://api.binderbyte.com/wilayah/kabupaten?api_key=c21f5d686f436e800025b6154f433108667c89cd2bd8e84e852ddd5f808e7e31&id_provinsi=" +
        provinsi_id);
    const data = response.json();
    dataKabupaten(data);
})

const dataKabupaten = async (data) => {
    const kabupaten = await data;
    kabupaten.value.forEach(element => {
        return kabupatenElement.innerHTML +=
            `<option value="${element.id} ${convertToUpperCase(element.name)}">${convertToUpperCase(element.name)}</option>`;
    });
}

kabupatenElement.addEventListener("change", async () => {
    kecamatanElement.innerHTML = "";

    const kabupaten_id = kabupatenElement.value.substring(0, 4);
    const response = await fetch(
        "https://api.binderbyte.com/wilayah/kecamatan?api_key=c21f5d686f436e800025b6154f433108667c89cd2bd8e84e852ddd5f808e7e31&id_kabupaten=" +
        kabupaten_id);
    const data = response.json();
    dataKecamatan(data);
})

const dataKecamatan = async (data) => {
    const kecamatan = await data;
    kecamatan.value.forEach(element => {
        return kecamatanElement.innerHTML +=
            `<option value="${element.id} ${convertToUpperCase(element.name)}">${convertToUpperCase(element.name)}</option>`;
    });
}

kecamatanElement.addEventListener("change", async () => {
    desaElement.innerHTML = "";

    const kecamatan_id = kecamatanElement.value.substring(0, 6);
    const response = await fetch(
        "https://api.binderbyte.com/wilayah/kelurahan?api_key=c21f5d686f436e800025b6154f433108667c89cd2bd8e84e852ddd5f808e7e31&id_kecamatan=" +
        kecamatan_id);
    const data = response.json();
    dataDesa(data);
})

const dataDesa = async (data) => {
    const desa = await data;
    desa.value.forEach(element => {
        const firstLater = element.name.substring(0, 1);
        const lastLater = element.name.substring(1, 50);
        const result = `${firstLater.toUpperCase() + lastLater.toLowerCase()}`;
        return desaElement.innerHTML +=
            `<option value="${element.id} ${convertToUpperCase(element.name)}">${convertToUpperCase(element.name)}</option>`;
    });
}

// dashboard-temp
(function () {
    'use strict'

    feather.replace({
        'aria-hidden': 'true'
    })

    // Graphs
    var ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ],
            datasets: [{
                data: [
                    15339,
                    21345,
                    18483,
                    24003,
                    23489,
                    24092,
                    12034
                ],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    })
})()

const bentukBantuan = document.querySelector("#bentuk_bantuan");
const jumlahBantuanLaporan = document.querySelector(".jumlah_bantuan_laporan");
bentukBantuan.addEventListener("change", () => {
    if (bentukBantuan.value === "Tunai") {
        jumlahBantuanLaporan.style.display = "block";
    } else {
        jumlahBantuanLaporan.style.display = "none";
    }
});