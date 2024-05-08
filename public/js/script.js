$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModal").html("Tambah data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah data");
    $("#nama").val("");
    $("#nimp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });
  $(".tampilModalUbah").on("click", function () {
    $("#judulModal").html("Ubah data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah data");
    $(".modal-body form").attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nimp").val(data.nimp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);

      },
    });
  });
});
