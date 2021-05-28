@include('layouts.app')
<title>74You - Formulaire de réservation</title>
<div class="row header" style="text-align:center;color:white;font-weight:bold;">
    <h3>Formulaire de résérvation</h3>
</div>

<form action="{{route('rentalAdd')}}" method="post">
    @csrf
    <p>Agence de départ : <label>
            <select name="startAgency_id">
                @forelse($agencies as $agency)
                    <option value="{{$agency->id}}">{{$agency->ville}} , {{$agency->address}} , {{$agency->postcode}}</option>
                @empty
                @endforelse
            </select>
        </label></p>
    <p>Date départ : <input type="date" name="startDate"/></p>
    <p>Agence d'arrivée : <label>
            <select name="endAgency_id">
                @forelse($agencies as $agency)
                    <option value="{{$agency->id}}">{{$agency->ville}} , {{$agency->address}} , {{$agency->postcode}}</option>
                @empty
                @endforelse
            </select>
        </label></p>
    <p>Date d'arrivée : <input type="date" name="endDate"/></p>
    <p><label>Modèle de véhicule : </label>
        <select name="vehicle_id">
            @forelse($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->numberPlate}} </option>
            @empty
            @endforelse
        </select>
    </p>
    <p>Id salarié conducteur : <input type="text" name="customer_id"/></p>
    <!--<p>Son numéro de permis : <input type="text" name="numPermis"/></p>-->
    <p><input type="submit" value="Réserver"></p>
</form>
