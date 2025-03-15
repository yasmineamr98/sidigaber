import { ApplicationConfig } from '@angular/core';
import { provideRouter } from '@angular/router';
import { provideHttpClient, withInterceptorsFromDi } from '@angular/common/http';
import { 
  TranslateLoader, 
  TranslateModule, 
  TranslateService, 
  TranslateStore, 
  MissingTranslationHandler,
  MissingTranslationHandlerParams
} from '@ngx-translate/core';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';
import { HttpClient } from '@angular/common/http';

import { routes } from './app.routes';
import { provideClientHydration } from '@angular/platform-browser';
import { ThemeService } from './services/theme.service';
import { TranslationService } from './services/translation.service';

// Translation loader factory
export function HttpLoaderFactory(http: HttpClient) {
  return new TranslateHttpLoader(http, './assets/i18n/', '.json');
}

// Custom missing translation handler (optional)
export class CustomMissingTranslationHandler implements MissingTranslationHandler {
  handle(params: MissingTranslationHandlerParams): any {
    return `MISSING: ${params.key}`;
  }
}

export const appConfig: ApplicationConfig = {
  providers: [
    provideRouter(routes), 
    provideClientHydration(),
    provideHttpClient(withInterceptorsFromDi()),
    
    // Theme and Translation Services
    ThemeService,
    TranslationService,
    TranslateStore,
    TranslateService,
    
    // Translation Loader
    {
      provide: TranslateLoader,
      useFactory: HttpLoaderFactory,
      deps: [HttpClient]
    },
    
    // Missing Translation Handler
    {
      provide: MissingTranslationHandler,
      useClass: CustomMissingTranslationHandler
    },
    
    // Translation Module Configuration
    ...(TranslateModule.forRoot({
      loader: {
        provide: TranslateLoader,
        useFactory: HttpLoaderFactory,
        deps: [HttpClient]
      },
      defaultLanguage: 'en'
    }).providers || [])
  ]
};
