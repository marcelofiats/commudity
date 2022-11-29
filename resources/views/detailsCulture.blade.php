@extends('includes.app')

@section('contents')
<div class="card">
    <div class="card-header">
        Detalhes Culturas Agrícolas
        <a class="d-flex justify-content-end" href="{{ url('/') }}">Voltar</a>
    </div>
    <div class="card-body">
        @if(!isset($culture) || empty($culture)) 
            <h4>Sem Atividades dessa Cultura!</h4>
        @else
            <div class="row">
                <div class="col-md-12">
                    <p>Cultura: {{ $culture->name }}</p>
                    <p>Tipo Unidade: {{ $culture->unit_type->name ?? 'Não definido' }} - {{ $culture->unit_type->sigle ?? 'N/A' }}</p>
                    <br/>

                    <p>Historico de Preço:</p>
                    @if (isset($culture->activities) && count($culture->activities) > 0)

                        @php    
                            $yearLast = 0;
                        @endphp

                        @foreach($culture->activities as $activity)

                            @if ($yearLast != $activity->year)
                                <div>
                                    <p>Ano: {{ $activity->year }} Preço: {{ $activity->unit_price }}</p> 
                                </div>

                                @php
                                    $yearLast = $activity->year;
                                @endphp
                            @endif

                        @endforeach

                        <hr/>
                        @foreach($culture->activities as $activity) 
                        <div>
                            <p>Ano: {{ $activity->year }}</p> 
                            <p>Área: {{ number_format($activity->area, 3, ',', '.') }}</p> 
                            <p>Quantidade: {{ number_format($activity->quantity, 3, ',', '.') }} - {{ $culture->unit_type->sigle ?? 'N/A' }}</p> 
                        </div>
                        <br/>
                        
                        @foreach ($activity->farms as $farm) 
                            <p>Local: {{ $farm->name }} - {{ $farm->city }}</p>
                            <p>Produtor: {{ $farm->producer->name ?? 'Produtor não definido!' }}</p>
                            <p>Telefone: {{ $farm->producer->phone ?? '--' }}</p>
                        @endforeach
                        
                        <div></div>
                        <hr/>
                        @endforeach
                    @else 
                        <h3>Cultura não tem atividades!</h3>
                    @endif
                </div>
            </div>
        @endif
            
    </div>
</div>
@endsection
