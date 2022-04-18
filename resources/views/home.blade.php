@extends('layouts.app')

@section('content')
<style>
            body {
                
background-image: url(https://img.freepik.com/free-photo/gray-oil-paint-textured-background_53876-138449.jpg?w=1380);         
background-repeat: no-repeat;
background-size: 100%;}
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position: relative;
   top: 8px;
  right: 16px;
}

a:hover, a:active {
  background-color: gray;
  color: white;
  
}
a{
   
}

        </style>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif

                    {{ __('You are logged in!') }}







                    <div class="container-fluid">
            <div class="side-body padding-top">
                    <h1 class="page-title">
        <i class=""></i>
        Add Personnelle
    </h1>
                    <div id="voyager-notifications"></div>
                    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="http://127.0.0.1:8000/admin"
                            >
                        <!-- PUT Method if we are editing -->
                        
                        <!-- CSRF TOKEN -->
                        <input type="hidden" name="_token" value="qYD84nWFSsmCMgOtIwlYhoZ8nEdI3hxh5My8GgQb">

                        <div class="panel-body">

                            
                            <!-- Adding / Editing -->
                            
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Nom</label>
                                                                                                                <input  type="text" class="form-control" name="Nom"
        placeholder="Nom"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Prenom</label>
                                                                                                                <input  type="text" class="form-control" name="Prenom"
        placeholder="Prenom"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Photo</label>
                                                                                                                <input  type="file" name="Photo" accept="image/*">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">NCIN</label>
                                                                                                                <input  type="text" class="form-control" name="NCIN"
        placeholder="NCIN"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">N De DRPP</label>
                                                                                                                <input  type="text" class="form-control" name="N_de_DRPP"
        placeholder="N De DRPP"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Date De Recrutement</label>
                                                                                                                <input type="date" class="form-control" name="Date_de_recrutement"
       placeholder="Date De Recrutement"
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Telephone</label>
                                                                                                                <input  type="text" class="form-control" name="Telephone"
        placeholder="Telephone"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Email</label>
                                                                                                                <input  type="text" class="form-control" name="Email"
        placeholder="Email"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Date Naissance</label>
                                                                                                                <input type="date" class="form-control" name="Date_Naissance"
       placeholder="Date Naissance"
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Professeur App Ensa</label>
                                                                                                                <br>
    

    <input type="checkbox" name="Professeur_app_ensa" class="toggleswitch"
        >

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Structure De Recherche</label>
                                                                                                                <input  type="text" class="form-control" name="Structure_de_recherche"
        placeholder="Structure De Recherche"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Directeur De La Structure De Recherche</label>
                                                                                                                <input  type="text" class="form-control" name="Directeur_de_la_structure_de_recherche"
        placeholder="Directeur De La Structure De Recherche"
       
       value="">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Dossier Scientifique</label>
                                                                                                                <input  type="file" name="Dossier_scientifique[]" multiple="multiple">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Dossier Pedagogique</label>
                                                                                                                <input  type="file" name="Dossier_Pedagogique[]" multiple="multiple">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">Dossier Administratif</label>
                                                                                                                <input  type="file" name="Dossier_administratif[]" multiple="multiple">

                                    
                                                                                                        </div>
                                                            <!-- GET THE DISPLAY OPTIONS -->
                                                                
                                <div class="form-group  col-md-12 " >
                                    
                                    <label class="control-label" for="name">specialites</label>
                                                                                                                <select
                    class="form-control select2-ajax" name="Specialite"
                    data-get-items-route="http://127.0.0.1:8000/admin/personnelles/relation"
                    data-get-items-field="personnelle_belongsto_specialite_relationship"
                                        data-method="add"
                                    >
                    
                                            <option value="">None</option>
                    
                                    </select>

            
        
    
                                    
                                                                                                        </div>
                            
                        </div><!-- panel-body -->

                        <div class="panel-footer">
                                                                                        <button type="submit" class="btn btn-primary save" formaction="http://127.0.0.1:8000/admin">Save</button>
                                                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
