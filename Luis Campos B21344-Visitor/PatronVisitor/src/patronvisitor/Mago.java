package patronvisitor;

/* @author Luis */

public class Mago implements IPersonaje{
   
    private int nivelMagia = 1;
    private String arma = "";
    private String conjuro = "";

    public Mago() {}

    public String getArma(){
        return this.arma;
    }

    public void setArma(String arma){
        this.arma = arma;
    }
    
    public int getNivelMagia(){
        return this.nivelMagia;
    }
    
    public void setNivelMagia(int nivelMagia){
        this.nivelMagia = nivelMagia;
    }
    
    public String getConjuro(){
        return this.conjuro;
    }
    
    public void setConjuro(String conjuro){
        this.conjuro = conjuro;
    }

    @Override
    public void accept(IVisitor visitor){
        visitor.visit(this);
    }
}
