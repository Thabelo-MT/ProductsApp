import { Component, OnInit } from '@angular/core';
import { ApiServiceService } from '../service/api-service.service';

@Component({
  selector: 'app-add-product',
  templateUrl: './add-product.component.html',
  styleUrls: ['./add-product.component.scss']
})
export class AddProductComponent implements OnInit {

  isAdded:boolean = false;
  constructor(private apiService:ApiServiceService) { }
  product:any = {
    Name:"",
    Price:"",
    Description:"",
    quantity_on_stock:""
  };;

  ngOnInit(): void {
  }

  addProduct(){
    this.apiService.addProducts(this.product).subscribe((results)=>{
      if (results.message==="added") {
        this.isAdded = true;
      }
      // else{
      //   console.log('delete failed',results);

      // }

      console.log(results);

    });
  }

}
