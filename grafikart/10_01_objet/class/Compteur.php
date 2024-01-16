<?php
class Compteur
{
    public $chemin;

    public function __construct(string $chemin)
    {
        $this->chemin = $chemin;
    }

    public function incrementer()
    {
        $compteur = 1;
        if (file_exists($this->chemin)) {
            $compteur = (int)file_get_contents($this->chemin);
            $compteur++;
        }
        file_put_contents($this->chemin, $compteur);
    }

    public function recuperer()
    {
        if (!file_exists($this->chemin)) {
            return "0";
        }
        return file_get_contents($this->chemin);
    }
}
