package com.company;

import java.io.IOException;
import java.util.Scanner;
import  java.lang.Math;

public class Main {

    public static void main(String args[]) throws IOException {

        System.out.println("Please enter f");
        Scanner inputReader = new Scanner(System.in);
        double f = inputReader.nextDouble();

        System.out.println("Please enter cMin");
        double cMin = inputReader.nextDouble();

        System.out.println("Please enter cMax");
        double cMax = inputReader.nextDouble();

        double l = calculatel(f, cMin, cMax);
        double fMin = calculateFrequency(l, cMax);
        double fMax = calculateFrequency(l, cMin);
        System.out.println("the require inductance is "+ l +" and the range of frequency is from " + fMin + " to " + fMax);

    }

    public static double calculatel(double f, double cMin, double cMax) {
        double c = Math.sqrt(cMin * cMax);
        double d = Math.pow((2*Math.PI) / f, 2) / c;
        return d;
    }

    public static double calculateFrequency(double l, double c) {
        double d = 2 * Math.PI / Math.sqrt(l * c);
        return d;
    }
}
