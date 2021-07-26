import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, FormControl, Validators } from '@angular/forms';
import {debounceTime} from 'rxjs/operators';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  form: FormGroup;
  constructor() { }

  ngOnInit() {

    
      this.form = new FormGroup
      ({
        name: new FormControl('', [Validators.required]),
        dalast_namete: new FormControl('', [Validators.required]),
        email: new FormControl('', [Validators.email]),
        ID_Type: new FormControl('', [Validators.required]),
        identification_number: new FormControl('', [Validators.required]),
        phone: new FormControl('', [Validators.required]),
        password: new FormControl('', [Validators.required]),
      });
  
      this.form.valueChanges
      .pipe(
        debounceTime(500)
      )
      .subscribe(value => {
        console.log(value);
      });
      
    
  }

}


