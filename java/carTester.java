import org.junit.Test;
import static org.junit.Assert.*;

public class CarTester {

    @Test
    public void testCar() {
        Car myHybird = new Car(50);

        AssertEqual(0, myHybird.getGasIntank());

        myHybird.addGas(20);

        AssertEqual(20, myHybird.getGasIntank());

        myHybird.drive(100);

        AssertEqual(18, myHybird.getGasIntank());


    }