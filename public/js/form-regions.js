document.addEventListener("DOMContentLoaded", function() {
    var provinsiSelect = document.getElementById("provinsi");
    var kabKotaSelect = document.getElementById("kab-kota");
    var kecamatanSelect = document.getElementById("kecamatan");
    var kelurahanSelect = document.getElementById("kelurahan");

    var xhrProvinsi = new XMLHttpRequest();
    xhrProvinsi.open("GET", "/get-provinsi", true);
    xhrProvinsi.onload = function() {
        if (xhrProvinsi.status === 200) {
            var dataProvinsi = JSON.parse(xhrProvinsi.responseText);
            dataProvinsi.forEach(function(province) {
                var option = document.createElement("option");
                option.value = province.id;
                option.text = province.name;
                provinsiSelect.appendChild(option);
            });
        } else {
            console.error("Failed to fetch province data");
        }
    };
    xhrProvinsi.send();

    provinsiSelect.addEventListener("change", function() {
        var selectedProvinceId = provinsiSelect.value;
        kabKotaSelect.innerHTML = '<option selected>Pilih Kabupaten/Kota</option>';
        if (selectedProvinceId === "") {
            return;
        }

        var xhrKabKota = new XMLHttpRequest();
        xhrKabKota.open("GET", "/get-kab-kota/" + selectedProvinceId, true);
        xhrKabKota.onload = function() {
            if (xhrKabKota.status === 200) {
                var dataKabKota = JSON.parse(xhrKabKota.responseText);
                dataKabKota.forEach(function(regency) {
                    var option = document.createElement("option");
                    option.value = regency.id;
                    option.text = regency.name;
                    kabKotaSelect.appendChild(option);
                });
            } else {
                console.error("Failed to fetch Kabupaten/Kota data");
            }
        };
        xhrKabKota.send();
    });

    kabKotaSelect.addEventListener("change", function() {
        var selectedKabKotaId = kabKotaSelect.value;
        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
        if (selectedKabKotaId === "") {
            return;
        }

        var xhrKecamatan = new XMLHttpRequest();
        xhrKecamatan.open("GET", "/get-kecamatan/" + selectedKabKotaId, true);
        xhrKecamatan.onload = function() {
            if (xhrKecamatan.status === 200) {
                var dataKecamatan = JSON.parse(xhrKecamatan.responseText);
                dataKecamatan.forEach(function(kecamatan) {
                    var option = document.createElement("option");
                    option.value = kecamatan.id;
                    option.text = kecamatan.name;
                    kecamatanSelect.appendChild(option);
                });
            } else {
                console.error("Failed to fetch Kecamatan data");
            }
        };
        xhrKecamatan.send();
    });

    kecamatanSelect.addEventListener("change", function() {
        var selectedKecamatanId = kecamatanSelect.value;
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
        if (selectedKecamatanId === "") {
            return;
        }

        var xhrKelurahan = new XMLHttpRequest();
        xhrKelurahan.open("GET", "/get-kelurahan/" + selectedKecamatanId, true);
        xhrKelurahan.onload = function() {
            if (xhrKelurahan.status === 200) {
                var dataKelurahan = JSON.parse(xhrKelurahan.responseText);
                dataKelurahan.forEach(function(kelurahan) {
                    var option = document.createElement("option");
                    option.value = kelurahan.id;
                    option.text = kelurahan.name;
                    kelurahanSelect.appendChild(option);
                });
            } else {
                console.error("Failed to fetch Kelurahan data");
            }
        };
        xhrKelurahan.send();
    });

    kelurahanSelect.addEventListener("change", function() {
        var selectedKelurahanId = kelurahanSelect.value;
        return selectedKelurahanId;
    });

});
