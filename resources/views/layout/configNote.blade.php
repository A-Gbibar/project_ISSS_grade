@extends('layout.app')
@section('linkCss')
<!-- link config css -->
<link rel="stylesheet" href="../css/configNote.css">
@endsection
@section('container')



        <section class="m-4">

           
            <div class="perant container ">
                <div class="titles mt-4 d-flex flex-column">
                    <span>Configuration Note</span>
                    <span> minimum et maximum</span>
                </div>
                <form method="POST" action="{{route('Setting.storeConfig' , 1)}}" >
                    @csrf
                    @method('PUT')
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>Ref</th>
                                <th>Note</th>
                                <th>Note max</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($configNote as $note )
                            <tr>
                                <td>PP01</td>
                                <td> <input type="text" placeholder="Note" name="NPP01" value="{{$note->NPP01}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NPP01_Max" value="{{$note->NPP01_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>PP02</td>
                                <td> <input type="text" placeholder="Note" name="NPP02" value="{{$note->NPP02}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NPP02_Max" value="{{$note->NPP02_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>PP03</td>
                                <td> <input type="text" placeholder="Note" name="NPP03" value="{{$note->NPP03}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NPP03_Max" value="{{$note->NPP03_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP01</td>
                                <td> <input type="text" placeholder="Note" name="NEP01" value="{{$note->NEP01}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP01_Max" value="{{$note->NEP01_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP02</td>
                                <td> <input type="text" placeholder="Note" name="NEP02" value="{{$note->NEP02}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP02_Max" value="{{$note->NEP02_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP03</td>
                                <td> <input type="text" placeholder="Note" name="NEP03" value="{{$note->NEP03}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP03_Max" value="{{$note->NEP03_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP04</td>
                                <td> <input type="text" placeholder="Note" name="NEP04" value="{{$note->NEP04}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP04_Max" value="{{$note->NEP04_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP05</td>
                                <td> <input type="text" placeholder="Note" name="NEP05" value="{{$note->NEP05}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP05_Max" value="{{$note->NEP05_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>EP06</td>
                                <td> <input type="text" placeholder="Note" name="NEP06" value="{{$note->NEP06}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NEP06_Max" value="{{$note->NEP06_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA01</td>
                                <td> <input type="text" placeholder="Note" name="NRPA01" value="{{$note->NRPA01}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA01_Max" value="{{$note->NRPA01_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA02</td>
                                <td> <input type="text" placeholder="Note" name="NRPA02" value="{{$note->NRPA02}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA02_Max" value="{{$note->NRPA02_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA03</td>
                                <td> <input type="text" placeholder="Note" name="NRPA03" value="{{$note->NRPA03}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA03_Max" value="{{$note->NRPA03_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA04</td>
                                <td> <input type="text" placeholder="Note" name="NRPA04" value="{{$note->NRPA04}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA04_Max" value="{{$note->NRPA04_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA05</td>
                                <td> <input type="text" placeholder="Note" name="NRPA05" value="{{$note->NRPA05}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA05_Max" value="{{$note->NRPA05_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA06</td>
                                <td> <input type="text" placeholder="Note" name="NRPA06" value="{{$note->NRPA06}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA06_Max" value="{{$note->NRPA06_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA07</td>
                                <td> <input type="text" placeholder="Note" name="NRPA07" value="{{$note->NRPA07}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA07_Max" value="{{$note->NRPA07_Max}}"> </td>
                            </tr>
                            <tr>
                                <td>RPA08</td>
                                <td> <input type="text" placeholder="Note" name="NRPA08" value="{{$note->NRPA08}}"> </td>
                                <td> <input type="text" placeholder="Note Max" name="NRPA08_Max" value="{{$note->NRPA08_Max}}"> </td>
                            </tr>
                         
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <div class="buttoms w-100">
                                        <button class="" type="submit"> sauvegarder </button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </form>
            </div>

        </section>
    @endsection
