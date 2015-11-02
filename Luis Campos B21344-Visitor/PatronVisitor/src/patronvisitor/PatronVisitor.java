
package patronvisitor;

/* @author Luis  */

import java.util.ArrayList;
import java.util.List;

public class PatronVisitor {

    public static void main(String[] args) {
        
        // Crear los elementos
        Guerrero g1 = new Guerrero();
        Guerrero g2 = new Guerrero();
        Mago m1 = new Mago();
        Mago m2 = new Mago();
        
        m1.setNivelMagia(3);
        m2.setNivelMagia(7);
        
        // Crear una lista para guardar los elementos
        List<IPersonaje> personajes = new ArrayList<IPersonaje>();

        // Agregar los elementos a una lista
        personajes.add(g1);
        personajes.add(g2);
        personajes.add(m1);
        personajes.add(m2);
        
        // Creamos el visitor y le pasamos la lista para equipar armas
        IVisitor visitorArma = new EquiparArma();
        visitorArma.visit(personajes);
        
        // Creamos el Visitor y le pasamos la lista para equipar con armaduras a los guerreros
        IVisitor visitorConjuro = new EquiparConjuro();
        visitorConjuro.visit( personajes );
        
        //Comprobar resultados
        System.out.println("El arma del guerrero g1 es: " + g1.getArma());
        System.out.println("El arma del guerrero g2 es: " + g2.getArma() + "\n");
        System.out.println("El arma del mago m1 es: " + m1.getArma());
        System.out.println("El arma del mago m1 es: " + m2.getArma() + "\n");
    
        System.out.println( "Conjuro del mago m1: " + m1.getConjuro());
        System.out.println( "Conjuro del mago m1: " + m2.getConjuro() + "\n");
    }
    
}
