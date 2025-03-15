import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslateModule, TranslateService } from '@ngx-translate/core';

import { ThemeService } from '../../services/theme.service';
import { TranslationService } from '../../services/translation.service';

@Component({
  selector: 'app-theme-language-toggle',
  standalone: true,
  imports: [CommonModule, TranslateModule],
  templateUrl: './theme-language-toggle.component.html',
  styleUrl: './theme-language-toggle.component.css'
})
export class ThemeLanguageToggleComponent {
  isDarkMode: boolean;
  currentLanguage: string;

  constructor(
    private themeService: ThemeService, 
    private translationService: TranslationService,
    private translateService: TranslateService
  ) {
    this.isDarkMode = this.themeService.getCurrentTheme();
    this.currentLanguage = this.translationService.getCurrentLanguage();

    // Subscribe to theme changes
    this.themeService.isDarkMode$.subscribe(isDark => {
      this.isDarkMode = isDark;
    });

    // Subscribe to language changes
    this.translationService.currentLang$.subscribe(lang => {
      this.currentLanguage = lang;
      this.translateService.use(lang);
    });
  }

  toggleTheme() {
    this.themeService.toggleTheme();
  }

  toggleLanguage() {
    this.translationService.toggleLanguage();
  }

  setLanguage(lang: string) {
    this.translationService.setLanguage(lang);
  }

  getAvailableLanguages(): string[] {
    return this.translationService.getAvailableLanguages();
  }
}
