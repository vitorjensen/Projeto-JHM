        <div id="container-inputs">
                <form action="{{route('route.contact.store')}}" method="post">
                @csrf
                <p class="form-group">
                    <label for="iname" class="form-label">{{_('Seu nome:') }}</label>
                    <input type="text" name="name" id="name" value="" class="form-input">
                </p>
                @error('name')
                    <div class="invalid-feedback" style="color: red;">
                    {{$message}}
                    </div>
                    <br>
                    @enderror
                <p class="form-group">
                    <label for="iemail" class="form-label">{{_('E-mail:') }}</label>
                    <input type="email" name="email" id="email" value="" class="form-input" >
                </p>
                @error('email')
                    <div class="invalid-feedback" style="color: red;">
                    {{$message}}
                    </div>
                    <br>
                    @enderror
                <p class="form-group">
                    <label for="iassunto" class="form-label">{{_('Assunto:') }}</label>
                    <input type="text" name="subject" id="subject" class="form-input" >
                </p>
                     @error('subject')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
                <p class="form-group">
                    <label for="imsg" class="form-label">{{_('Sua mensagem:') }}</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-input"></textarea>
                </p>
                     @error('message')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
            </div>
                    <script>
                    @if(Session::has('success'))

                    toastr.success("{{ session('success')}}")
                    @endif

                    </script>
                    <script>
                    @if(Session::has('error'))

                    toastr.error("{{ session('error')}}")
                    @endif

                    </script>
                    <div id="container-buttom">
                    <a href="#"><input type="submit" value="Enviar"></a>
                    </form>
            </div>