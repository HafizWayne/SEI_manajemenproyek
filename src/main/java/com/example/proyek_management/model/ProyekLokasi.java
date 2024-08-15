package com.example.proyek_management.model;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "proyek_lokasi")
@Data
public class ProyekLokasi {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @ManyToOne
    @JoinColumn(name = "proyek_id", referencedColumnName = "id")
    private Proyek proyek;

    @ManyToOne
    @JoinColumn(name = "lokasi_id", referencedColumnName = "id")
    private Lokasi lokasi;
}
