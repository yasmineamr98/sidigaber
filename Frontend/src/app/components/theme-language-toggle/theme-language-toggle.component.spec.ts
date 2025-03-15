import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ThemeLanguageToggleComponent } from './theme-language-toggle.component';

describe('ThemeLanguageToggleComponent', () => {
  let component: ThemeLanguageToggleComponent;
  let fixture: ComponentFixture<ThemeLanguageToggleComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ThemeLanguageToggleComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ThemeLanguageToggleComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
