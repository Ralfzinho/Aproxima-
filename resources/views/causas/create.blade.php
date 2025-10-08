<body>
     <div class="container">
         <h1>Nova Causa</h1>
         <form action="{{ route('causas.store') }}" method="POST">
             <!-- Token CSRF para proteção contra ataques CSRF -->
             @csrf
             <div class="form-group">
                <label for="nome">Nome da causa:</label>
                <input type="text" name="nome">
            </div>
             <button type="submit" class="btn btn-success">Salvar</button>
             <a href="{{ route('causas.index') }}" class="btn btn-secondary">Cancelar</a>
             </form>
         </div>
     </body>