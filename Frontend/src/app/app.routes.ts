import { Routes } from '@angular/router';
import { HomePageComponent } from './home-page/home-page.component';
import { KitchenComponent } from './kitchen/kitchen.component';
import { RawMeatComponent } from './raw-meat/raw-meat.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';
import { ReviewComponent } from './review/review.component';

export const routes: Routes = [
  { path: '', component: HomePageComponent },
  { path: 'kitchen', component: KitchenComponent },
  { path: 'raw-meat', component: RawMeatComponent },
  { path: 'about', component: AboutComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'reviews', component: ReviewComponent },
  { path: '**', redirectTo: '' }
];
