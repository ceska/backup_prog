import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BlogComponent } from './blog/blog.component';
import { BlogPostsComponent } from './blog-posts/blog-posts.component';

const childRoutes: Routes = [
  { path: '', component: BlogComponent, children:
    [
      {path: '', component: BlogPostsComponent }
    ]
  }
];

@NgModule({
  declarations: [],
  imports: [
    RouterModule.forChild(childRoutes)
  ],
  exports: [
    RouterModule
  ]
})
export class BlogRoutingModule { }
