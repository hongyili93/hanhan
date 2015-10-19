import static java.lang.Math;

public class antenna {
    private double f;
    private double cMax;
    private double cMin;
    private double l;

    public antenna(double f, double cMin, double cMax) {
        this.f = f;
        this.cMin = cMin;
        this.cMax = cMax;
        this.l = calculatel();
        double fMin = calculateFrequency(cMax);
        double fMax = calculateFrequency(cMin);
        System.out.println("the require inductance is "+ l +" and the range of frequency is from " + fMin + " to " + fMax);
    }
    
    public double calculatel() {
        double c = Math.sqrt(cMin * cMax);
        double d = Math.pow((2*Math.PI) / f, 2) / c;
        return d;
    }
    
    public double calculateFrequency(double c) {
        double d = 2 * Math.PI / Math.sqrt(l * c);
        return d
    }
    
    public void drive(double miles) {
        gasLeft = getGasInTank() - miles/fuelEfficiency;
    }
}
