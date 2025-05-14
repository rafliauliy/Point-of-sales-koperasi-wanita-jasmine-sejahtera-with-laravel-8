<div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-labelledby="modal-member">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih Member</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-member">
                    <thead>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>
                        @foreach ($member as $key => $item)
                            <tr>
                                <td width="5%">{{ $key+1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs btn-flat"
                                        onclick="pilihMember('{{ $item->id_member }}', '{{ $item->kode_member }}')">
                                        <i class="fa fa-check-circle"></i>
                                        Pilih
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs btn-flat"
                                        onclick="batalPilihMember('{{ $item->id_member }}')">
                                        <i class="fa fa-times-circle"></i>
                                        Batal Pilih
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan kode JavaScript berikut ke dalam blok <script> Anda -->

<script>
    // ... Kode JavaScript Anda yang sudah ada ...

    function batalPilihMember(id_member) {
        // Di sini Anda dapat menambahkan logika untuk mengaktifkan pembatalan pilihan member.
        // Misalnya, Anda dapat menghapus nilai yang sudah dipilih atau melakukan tindakan lain sesuai kebutuhan Anda.

        // Contoh tindakan yang mungkin Anda lakukan adalah mengosongkan nilai yang telah dipilih:
        $('#id_member').val(''); // Mengosongkan nilai ID member
        $('#kode_member').val(''); // Mengosongkan nilai kode member
        $('#diskon').val(0); // Mengosongkan nilai diskon (jika ada)

        // Selain itu, Anda dapat melakukan tindakan lain yang sesuai dengan kebutuhan Anda.
    }
</script>
