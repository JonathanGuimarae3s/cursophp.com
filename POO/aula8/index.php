<?php
//  interface serve para definir o modelo a ser usado por outras classes
interface Crud
{
    public function create();
    public function read();
    public function update();
    public function delete();
}
class Noticias implements Crud
{
    // implements => serve para implementar o conteudo na class
    
    public function create()
    {
        // logica para criar um noticia
    }
    public function read()
    {
        // logica para ler uma noticia
    }
    public function update()
    {
        // logica para atualizar uma noticia
    }
    public function delete()
    
    {
        // logica para deletar uma noticia
    }



}
