import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { MessageService } from './message.service';

import { Event } from './event';
import { EVENTS } from './data';

@Injectable({
  providedIn: 'root'
})
export class EventService {

  constructor(private messageService: MessageService) { }

  getEvents(): Observable<Event[]> {
    this.messageService.add('loaded page');
    return of(EVENTS);
  }

  getEvent(id: number): Observable<Event> {
    this.messageService.add(`loaded event ${id}`);
    return of(EVENTS.find(event => event.id === id));
  }
}
