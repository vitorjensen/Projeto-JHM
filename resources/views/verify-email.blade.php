@extends('_layouts.auth_index')
@section('main_verifyemail')
    <main>
        <div class="main-all">
            <div class="main-all-titulo">
                <h1>{{_('Verifique sua conta de Email para prosseguir!') }}</h1>
            </div>

            <script>

            @if (Session::has('status') == 'verification-link-sent')
            toastr.success("{{ session('status')}}")
            @endif
            
            </script>
            <div class="main-all-form">
                <!-- <h2>Um link de Verificação foi enviado em seu endereço de Email!</h2> -->
                <form action="{{ route('verification.send') }}" method="post" autocomplete="on">
                    @csrf
               
</div>
            <div class="main-all-button" class="container">
                <a href=""><input type="button" value="Reenviar link"></a>
            </div>
            <br>
        </div>
        </form>

<!-- <script>
        @if(Session::has('status'))

        toastr.success("{{ session('status')}}")

        @elseif(Session::has('email'))
        toastr.error("{{ session('email')}}")
        @endif
 
</script> -->
    </main>
@endsection