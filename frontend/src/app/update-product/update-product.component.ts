import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ApiServiceService } from '../service/api-service.service';

@Component({
  selector: 'app-update-product',
  templateUrl: './update-product.component.html',
  styleUrls: ['./update-product.component.scss']
})
export class UpdateProductComponent implements OnInit {

  productID:any;
  isAdded:boolean = false;
  constructor(private apiService:ApiServiceService,private route:ActivatedRoute) { }
  product:any = {
    Name:"",
    Price:"",
    Description:"",
    quantity_on_stock:""
  };;

  ngOnInit(): void {
    this.getProduct();
  }

  updateProduct(){
    this.apiService.updateProducts(this.product).subscribe((results)=>{
      if (results.message==="updated") {
        this.isAdded = true;
      }
      // else{
      //   console.log('delete failed',results);

      // }

      console.log(results);

    });
  }

  getProduct(){
    this.route.params.subscribe((data)=> {
      this.productID = data['id']
      this.apiService.getProduct(this.productID).subscribe((res)=>{
        this.product = res;
      });
    });

  }
}
