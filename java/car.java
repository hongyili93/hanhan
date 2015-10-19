public class Car {
    private double fuelEfficiency;
    private double gasLeft;
    
    public Car(double fuelEfficiency) {
        this.fuelEfficiency = fuelEfficiency;
        this.gasLeft = 0;
    }
    
    public void addGas(double amount) {
        gasLeft = gasLeft + amount;
    }
    
    public double getGasInTank() {
        return gasLeft;
    }
    
    public void drive(double miles) {
        gasLeft = getGasInTank() - miles/fuelEfficiency;
    }
}
