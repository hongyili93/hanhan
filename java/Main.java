package com.company;

import javax.swing.*;

public class Main {

    public static void main (String[] args) {
        String z;
        int zInt;

        z = JOptionPane.showInputDialog(null, "Enter an integer");
        zInt = Integer.parseInt(z);

        cube(zInt);
        //JOptionPane.showMessageDialog (null, "The cube of " + zInt +" is " + cube (zInt));
        //System.exit(0);
    }


    public static void cube (int num) {
        int z = (int)Math.pow(num, 3);
        JOptionPane.showMessageDialog (null, "The cube of " + num +" is " + z);
        System.exit(0);
    }
    /*
    public static int cube (int num) {
        int z = (int)Math.pow(num, 3);
        return z;
    }
     */
}
