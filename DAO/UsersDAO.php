<?php

interface UsersDAO {
    
    public function connectBase();
    public function connectUser(User $user);
    public function getNotesFrais(User $user);
    public function getFrais($id_frais) ;
    public function ajouterFrais(User $user);
    public function supprimerFrais(Frais $frais);
    public function modifierFrais(Frais $frais);
    //public function changerDevise(Frais $Frais);   
    
}
