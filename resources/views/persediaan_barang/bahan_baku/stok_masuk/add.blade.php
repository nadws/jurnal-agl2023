<x-theme.app title="{{ $title }}" table="Y" sizeCard="12">

    <x-slot name="cardHeader">

    </x-slot>


    <x-slot name="cardBody">
        <form action="{{ route('bahan_baku.store') }}" method="post" id="save_stok_masuk">
            @csrf
            <div id="load_menu"></div>
    </x-slot>
    <x-slot name="cardFooter">

        @php
            $cek = false;
            $nonot = request()->get('no_nota');
            if (!empty($nonot)) {
                if(strlen($nonot) > 200 || strlen($nonot) < 200){
                    echo '<script>history.back()</script>';
                }
                $no_notas = decrypt($nonot);
                if (\App\Models\Stok::getStatus($no_notas)->jenis != 'selesai') {
                    $cek = true;
                }
            }
        @endphp
        {{-- @if (empty(request()->get('no_nota')) || $cek)
        @endif --}}
        <div class="btn-group float-end dropdown me-1 mb-1">

            <button type="submit" name="simpan" value="simpan" class=" btn btn-primary button-save">
                Simpan
            </button>
            <button class="float-end btn btn-primary btn_save_loading" type="button" disabled hidden>
                <span class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span>
                Loading...
            </button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu "
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(81px, 40px, 0px);"
                data-popper-placement="bottom-start">
                <button class="dropdown-item" type="submit" value="draft" name="simpan">Draft</button>
                <button class="dropdown-item" type="submit" value="simpan" name="simpan">Simpan</button>
            </div>
        </div>

        <a href="{{ route('bahan_baku.index') }}" class="float-end btn btn-outline-primary me-2">Batal</a>
        </form>


    </x-slot>


    @section('scripts')
        <script>
            load_menu()

            function load_menu() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('bahan_baku.load_menu') }}?no_nota={{ $no_notas ?? '' }}",
                    data: {
                        'no_nota': "{{ $no_notas ?? '' }}",
                    },
                    success: function(r) {
                        $("#load_menu").html(r);
                        $('.select2').select2({})
                    }
                });
            }

            var count = 3;
            plusRow(count, 'tbh_baris', 'tbh_baris')
            convertRp('rp-nohide', 'rp-hide')
            aksiBtn('#save_stok_masuk')

            $(document).on('change', '.produk-change', function() {
                var val = $(this).val()
                var count = $(this).attr('count')
                $.ajax({
                    type: "GET",
                    url: "get_stok_sebelumnya",
                    data: {
                        id_produk: val
                    },
                    success: function(r) {
                        $('.stok-sebelumnya' + count).val(isNaN(r.ttlDebit - r.ttlKredit) ? 0 : r.ttlDebit - r.ttlKredit ?? 0);
                    }
                });
            })
        </script>
    @endsection
</x-theme.app>
