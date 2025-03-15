import { Injectable, Inject, PLATFORM_ID } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';
import { BehaviorSubject } from 'rxjs';
import { TranslateService } from '@ngx-translate/core';

@Injectable({
  providedIn: 'root'
})
export class TranslationService {
  private currentLangSubject = new BehaviorSubject<string>('en');
  currentLang$ = this.currentLangSubject.asObservable();

  private availableLanguages = ['en', 'ar'];

  constructor(
    private translateService: TranslateService,
    @Inject(PLATFORM_ID) private platformId: Object
  ) {
    // Set default language
    this.translateService.setDefaultLang('en');
    this.translateService.addLangs(this.availableLanguages);

    // Check local storage for saved language preference only in browser
    if (isPlatformBrowser(this.platformId)) {
      const savedLang = localStorage.getItem('language');
      if (savedLang && this.availableLanguages.includes(savedLang)) {
        this.setLanguage(savedLang);
      } else {
        this.setLanguage('en');
      }
    } else {
      // Fallback for server-side rendering
      this.setLanguage('en');
    }
  }

  setLanguage(lang: string) {
    if (!this.availableLanguages.includes(lang)) {
      console.warn(`Language ${lang} is not supported. Defaulting to English.`);
      lang = 'en';
    }

    // Use TranslateService to set language
    this.translateService.use(lang);
    this.currentLangSubject.next(lang);

    // Set language in localStorage only in browser
    if (isPlatformBrowser(this.platformId)) {
      localStorage.setItem('language', lang);

      // Update document direction for RTL languages
      document.dir = lang === 'ar' ? 'rtl' : 'ltr';
    }
  }

  getCurrentLanguage(): string {
    return this.translateService.currentLang || this.translateService.defaultLang;
  }

  toggleLanguage() {
    const currentIndex = this.availableLanguages.indexOf(this.getCurrentLanguage());
    const nextIndex = (currentIndex + 1) % this.availableLanguages.length;
    const newLang = this.availableLanguages[nextIndex];
    this.setLanguage(newLang);
  }

  getAvailableLanguages(): string[] {
    return this.availableLanguages;
  }

  // Helper method to translate text
  translate(key: string, params?: any): string {
    return this.translateService.instant(key, params);
  }
}
