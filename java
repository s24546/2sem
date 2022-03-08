package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        int x = scanner.nextInt();
        int[] tablica = new int[x];
        for (int i = 0; i <= x; i++) {
            int y = scanner.nextInt();
            tablica[i]=y;
        }
        for(int j=0; j<=x; j++) {
            System.out.println(tablica[j]);
        }
    }
}
//System.out.println("Podaj temperature");
    //Scanner scanner = new Scanner(System.in);
    //int x = scanner.nextInt();
    //double y = 1.8;
    //System.out.println(x*y+32);
