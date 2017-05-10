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
public class Aula03Visibilidade {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
            Caneta c1 = new Caneta();
            c1.modelo="BIC cristal";
            c1.cor="Azul";
            //c1.ponta = 0.5f; //não é possivel alterar atributos privados
            c1.carga=80;//atributos protegidos podem ser alterados atraves do metodo main
            //c1.tampada=true;
            c1.destampar();
            c1.rabiscar();
            c1.status();
            
            
            
    }
    
}
