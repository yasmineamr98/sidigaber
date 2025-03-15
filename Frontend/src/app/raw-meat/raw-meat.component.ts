import { Component, OnInit } from '@angular/core';
import { TranslateModule } from '@ngx-translate/core';
import { CommonModule } from '@angular/common';
import { CurrencyPipe } from '@angular/common';

interface MeatCategory {
  name: string;
  description: string;
  image: string;
  origin: string;
  price: number;
}

@Component({
  selector: 'app-raw-meat',
  standalone: true,
  imports: [
    CommonModule,
    TranslateModule,
    CurrencyPipe
  ],
  templateUrl: './raw-meat.component.html',
  styleUrl: './raw-meat.component.css'
})
export class RawMeatComponent implements OnInit {
  meatCategories: MeatCategory[] = [
    {
      name: 'RAW_MEAT.CATEGORIES.BEEF',
      description: 'RAW_MEAT.BEEF_DESCRIPTION',
      image: 'assets/images/beef.jpg',
      origin: 'RAW_MEAT.ORIGIN.LOCAL',
      price: 49.99
    },
    {
      name: 'RAW_MEAT.CATEGORIES.LAMB',
      description: 'RAW_MEAT.LAMB_DESCRIPTION',
      image: 'assets/images/lamb.jpg',
      origin: 'RAW_MEAT.ORIGIN.IMPORTED',
      price: 59.99
    },
    {
      name: 'RAW_MEAT.CATEGORIES.CHICKEN',
      description: 'RAW_MEAT.CHICKEN_DESCRIPTION',
      image: 'assets/images/chicken.jpg',
      origin: 'RAW_MEAT.ORIGIN.LOCAL',
      price: 29.99
    },
    {
      name: 'RAW_MEAT.CATEGORIES.SPECIALTY_CUTS',
      description: 'RAW_MEAT.SPECIALTY_CUTS_DESCRIPTION',
      image: 'assets/images/specialty-cuts.jpg',
      origin: 'RAW_MEAT.ORIGIN.PREMIUM',
      price: 79.99
    }
  ];

  constructor() {}

  ngOnInit(): void {}
}