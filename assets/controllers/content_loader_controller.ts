import { Controller } from "@hotwired/stimulus";
import axios from "axios";

export default class extends Controller {
  static values = { url: String, refreshInterval: Number };

  declare urlValue: string;
  declare refreshIntervalValue: number;

  connect(): void {
    this.load;
  }

  load(): void {
    axios.get(this.urlValue).then((res) => (this.element.innerHTML = res.data));
  }
}
