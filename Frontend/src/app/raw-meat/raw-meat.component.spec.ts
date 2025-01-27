import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RawMeatComponent } from './raw-meat.component';

describe('RawMeatComponent', () => {
  let component: RawMeatComponent;
  let fixture: ComponentFixture<RawMeatComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [RawMeatComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(RawMeatComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
