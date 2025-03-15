import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslateModule } from '@ngx-translate/core';
import { CurrencyPipe } from '@angular/common';

interface MenuItem {
  name: string;
  description: string;
  image: string;
  origin: string;
  price: number;
}

interface MenuSection {
  title: string;
  items: MenuItem[];
}

@Component({
  selector: 'app-kitchen',
  standalone: true,
  imports: [
    CommonModule,
    TranslateModule,
    CurrencyPipe
  ],
  templateUrl: './kitchen.component.html',
  styleUrl: './kitchen.component.css'
})
export class KitchenComponent implements OnInit {
  menuSections: MenuSection[] = [
    {
      title: 'KITCHEN.MENU_SECTIONS.APPETIZERS',
      items: [
        {
          name: 'KITCHEN.MENU_ITEMS.APPETIZERS.ITEM1_NAME',
          description: 'KITCHEN.MENU_ITEMS.APPETIZERS.ITEM1_DESCRIPTION',
          image: 'assets/images/kitchen-appetizer1.jpg',
          origin: 'KITCHEN.ORIGIN.LOCAL',
          price: 12.99
        },
        {
          name: 'KITCHEN.MENU_ITEMS.APPETIZERS.ITEM2_NAME',
          description: 'KITCHEN.MENU_ITEMS.APPETIZERS.ITEM2_DESCRIPTION',
          image: 'assets/images/kitchen-appetizer2.jpg',
          origin: 'KITCHEN.ORIGIN.IMPORTED',
          price: 15.99
        }
      ]
    },
    {
      title: 'KITCHEN.MENU_SECTIONS.MAIN_COURSES',
      items: [
        {
          name: 'KITCHEN.MENU_ITEMS.MAIN_COURSES.ITEM1_NAME',
          description: 'KITCHEN.MENU_ITEMS.MAIN_COURSES.ITEM1_DESCRIPTION',
          image: 'assets/images/kitchen-main1.jpg',
          origin: 'KITCHEN.ORIGIN.LOCAL',
          price: 29.99
        },
        {
          name: 'KITCHEN.MENU_ITEMS.MAIN_COURSES.ITEM2_NAME',
          description: 'KITCHEN.MENU_ITEMS.MAIN_COURSES.ITEM2_DESCRIPTION',
          image: 'assets/images/kitchen-main2.jpg',
          origin: 'KITCHEN.ORIGIN.PREMIUM',
          price: 39.99
        }
      ]
    },
    {
      title: 'KITCHEN.MENU_SECTIONS.DESSERTS',
      items: [
        {
          name: 'KITCHEN.MENU_ITEMS.DESSERTS.ITEM1_NAME',
          description: 'KITCHEN.MENU_ITEMS.DESSERTS.ITEM1_DESCRIPTION',
          image: 'assets/images/kitchen-dessert1.jpg',
          origin: 'KITCHEN.ORIGIN.LOCAL',
          price: 9.99
        },
        {
          name: 'KITCHEN.MENU_ITEMS.DESSERTS.ITEM2_NAME',
          description: 'KITCHEN.MENU_ITEMS.DESSERTS.ITEM2_DESCRIPTION',
          image: 'assets/images/kitchen-dessert2.jpg',
          origin: 'KITCHEN.ORIGIN.IMPORTED',
          price: 12.99
        }
      ]
    },
    {
      title: 'KITCHEN.MENU_SECTIONS.BEVERAGES',
      items: [
        {
          name: 'KITCHEN.MENU_ITEMS.BEVERAGES.ITEM1_NAME',
          description: 'KITCHEN.MENU_ITEMS.BEVERAGES.ITEM1_DESCRIPTION',
          image: 'assets/images/kitchen-beverage1.jpg',
          origin: 'KITCHEN.ORIGIN.LOCAL',
          price: 6.99
        },
        {
          name: 'KITCHEN.MENU_ITEMS.BEVERAGES.ITEM2_NAME',
          description: 'KITCHEN.MENU_ITEMS.BEVERAGES.ITEM2_DESCRIPTION',
          image: 'assets/images/kitchen-beverage2.jpg',
          origin: 'KITCHEN.ORIGIN.IMPORTED',
          price: 8.99
        }
      ]
    }
  ];

  constructor() {}

  ngOnInit(): void {}
}
