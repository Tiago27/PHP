/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aula03visibilidade;

/**
 *
 * @author Tiago
 */
public class Caneta {
   public String modelo;
    public String cor;
    private float ponta;
    protected int carga;
    private boolean tampada;
    
    //Esse metodo, é o estatus da classe
    public void status(){
        System.out.println("Uma caneta " + this.cor);
        System.out.println("Esta tampada: "+this.tampada);
        System.out.println("Tamanho da ponta: "+this.ponta);
        System.out.println("Modelo: "+this.modelo);
        System.out.println("Carga: "+ this.carga);
    }
    //Os metodos são o que a classe faz
    public void rabiscar(){
         if (tampada) {
             System.out.println("Erro!\nNão é possivel rabiscar!");
        } else {
             System.out.println("Estou rabiscando...");
        }
    }
    
    public void destampar(){
        this.tampada = false;
    }
    
    public void tampar(){
        this.tampada = true;
    }
    
}
