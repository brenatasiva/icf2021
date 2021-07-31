$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUpdate").on("click", function () {
    $("#formModalLabel").html("Ubah data mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/mahasiswa/ubah");
    $("#nrp").prop("disabled", true);

    const nrp = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getupdate",
      data: { nrp: nrp },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#nrph").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
    });
  });
});
